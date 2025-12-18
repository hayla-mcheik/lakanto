<?php

namespace App\Livewire\Frontend\Checkout;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\PromoCode;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Mail\PlaceOrderMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CheckoutShow extends Component
{
    public $carts;
    public $totalProductAmount = 0;
    public $fullname, $email, $phone, $pincode, $address;
    public $payment_mode = null, $payment_id = null;
    public $promoCode;
    public $promoCodeApplied = false;
    public $isPersonalInfoValid = false;

    public function rules()
    {
        return [
            'fullname' => 'required|string|max:121',
            'email' => 'required|email|max:121',
            'phone' => 'required|string|max:11|min:8',
            'pincode' => 'nullable|string|max:6|min:5',
            'address' => 'required|string|max:500',
        ];
    }

    public function validatePersonalInformation()
    {
        $this->validate();
        $this->isPersonalInfoValid = true;
        
        // Dispatch event to trigger JavaScript
        $this->dispatch('personalInfoValidated');
    }

    /* ---------------- Promo Code ---------------- */

    public function applyPromoCode()
    {
        if ($this->promoCodeApplied) {
            $this->dispatch(
                'message',
                text: 'Promo code has already been applied.',
                type: 'error',
                status: 200
            );
            return;
        }

        $promoCode = PromoCode::where('code', $this->promoCode)
            ->where('valid_from', '<=', now())
            ->where('valid_to', '>=', now())
            ->first();

        if (!$promoCode) {
            $this->dispatch(
                'message',
                text: 'Invalid or expired promo code.',
                type: 'error',
                status: 200
            );
            return;
        }

        $discountAmount = $this->totalProductAmount * $promoCode->discount_amount;

        if ($discountAmount <= 0) {
            $this->dispatch(
                'message',
                text: 'Promo code discount is invalid.',
                type: 'error',
                status: 200
            );
            return;
        }

        $this->totalProductAmount -= $discountAmount;
        $this->promoCodeApplied = true;

        $this->dispatch(
            'promoCodeApplied',
            totalAmount: $this->totalProductAmount
        );

        $this->dispatch(
            'message',
            text: 'Promo code applied successfully',
            type: 'success',
            status: 200
        );
    }

    /* ---------------- Cart Total ---------------- */

    public function calculateTotalProductAmount()
    {
        $this->totalProductAmount = 0;
        $this->carts = Cart::where('user_id', auth()->id())->get();

        foreach ($this->carts as $cartItem) {
            $this->totalProductAmount +=
                $cartItem->product->selling_price * $cartItem->quantity;
        }

        session()->put('totalProductAmount', $this->totalProductAmount);
    }

    public function mount()
    {
        if (!session()->has('totalProductAmount')) {
            $this->calculateTotalProductAmount();
        } else {
            $this->totalProductAmount = session()->get('totalProductAmount');
        }

        $this->carts = Cart::where('user_id', auth()->id())->get();
    }

    /* ---------------- Order ---------------- */

    public function placeOrder()
    {
        $this->validate();

        $order = Order::create([
            'user_id' => auth()->id(),
            'tracking_no' => 'ecomerce-' . Str::random(10),
            'fullname' => $this->fullname,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'status_message' => 'in progress',
            'payment_mode' => $this->payment_mode,
            'payment_id' => $this->payment_id,
        ]);

        foreach ($this->carts as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'product_color_id' => $cartItem->product_color_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->selling_price,
            ]);

            if ($cartItem->product_color_id) {
                $cartItem->productColor()
                    ->where('id', $cartItem->product_color_id)
                    ->decrement('quantity', $cartItem->quantity);
            } else {
                $cartItem->product()
                    ->where('id', $cartItem->product_id)
                    ->decrement('quantity', $cartItem->quantity);
            }
        }

        return $order;
    }

    public function codOrder()
    {
        $this->payment_mode = 'Cash on Delivery';
        $order = $this->placeOrder();

        if (!$order) {
            $this->dispatch(
                'message',
                text: 'Something Went Wrong',
                type: 'error',
                status: 500
            );
            return;
        }

        Cart::where('user_id', auth()->id())->delete();

        try {
            Mail::to($order->email)->send(new PlaceOrderMailable($order));
        } catch (\Exception $e) {}

        $this->dispatch(
            'message',
            text: 'Order Placed Successfully',
            type: 'success',
            status: 200
        );

        return redirect()->to('thank-you');
    }

    public function render()
    {
        $user = auth()->user();

        if ($user) {
            $this->fullname = $user->name;
            $this->email = $user->email;

            if ($user->userDetail) {
                $this->phone = $user->userDetail->phone;
                $this->address = $user->userDetail->address;
            }
        }

        return view('livewire.frontend.checkout.checkout-show');
    }
}
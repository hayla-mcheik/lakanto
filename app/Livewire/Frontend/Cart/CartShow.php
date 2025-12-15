<?php

namespace App\Livewire\Frontend\Cart;

use App\Models\Cart;
use Livewire\Component;

class CartShow extends Component
{
    public $cart, $totalPrice = 0;

    public function decrementQuantity(int $cartId)
    {
        $cartData = Cart::where('id', $cartId)->where('user_id', auth()->id())->first();

        if (!$cartData) {
            $this->dispatch(
                'message',
                text: 'Something Went Wrong!',
                type: 'error',
                status: 404
            );
            return;
        }

        if ($cartData->quantity <= 1) {
            $this->dispatch(
                'message',
                text: 'Quantity cannot be less than 1',
                type: 'error',
                status: 400
            );
            return;
        }

        if ($cartData->product->selling_price < 1) {
            $this->dispatch(
                'message',
                text: 'Product price must be at least $1',
                type: 'error',
                status: 400
            );
            return;
        }

        $cartData->decrement('quantity');

        $this->dispatch(
            'message',
            text: 'Quantity Updated',
            type: 'success',
            status: 200
        );
    }

    public function incrementQuantity(int $cartId)
    {
        $cartData = Cart::where('id', $cartId)->where('user_id', auth()->id())->first();

        if (!$cartData) {
            $this->dispatch(
                'message',
                text: 'Something Went Wrong!',
                type: 'error',
                status: 404
            );
            return;
        }

        if ($cartData->product->selling_price < 1) {
            $this->dispatch(
                'message',
                text: 'Product price must be at least $1',
                type: 'error',
                status: 400
            );
            return;
        }

        if ($cartData->product->quantity <= $cartData->quantity) {
            $this->dispatch(
                'message',
                text: 'Only ' . $cartData->product->quantity . ' Quantity Available',
                type: 'success',
                status: 200
            );
            return;
        }

        $cartData->increment('quantity');

        $this->dispatch(
            'message',
            text: 'Quantity Updated',
            type: 'success',
            status: 200
        );
    }

    public function removeCartItem(int $cartId)
    {
        $cartRemoveData = Cart::where('user_id', auth()->id())->where('id', $cartId)->first();

        if (!$cartRemoveData) {
            $this->dispatch(
                'message',
                text: 'Something Went Wrong',
                type: 'error',
                status: 500
            );
            return;
        }

        $cartRemoveData->delete();

        $this->dispatch('CartAddedUpdated');

        $this->dispatch(
            'message',
            text: 'Cart Item Removed Successfully',
            type: 'success',
            status: 200
        );
    }

    public function render()
    {
        $this->cart = Cart::where('user_id', auth()->id())->get();

        return view('livewire.frontend.cart.cart-show', [
            'cart' => $this->cart
        ]);
    }
}

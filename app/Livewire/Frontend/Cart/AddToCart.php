<?php

namespace App\Livewire\Frontend\Cart;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class AddToCart extends Component
{
    public $product;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function addToCart($productId)
    {
        if (!Auth::check()) {
            $this->dispatch(
                'message',
                text: 'Please Login to add to cart',
                type: 'info',
                status: 401
            );
            return;
        }

        if (Auth::user()->role_as == '1') {
            $this->dispatch(
                'message',
                text: 'Only User can add to cart',
                type: 'warning',
                status: 200
            );
            return;
        }

        $product = Product::find($productId);

        if (!$product || $product->status != '0') {
            $this->dispatch(
                'message',
                text: 'Product Does not exist',
                type: 'warning',
                status: 404
            );
            return;
        }

        if (Cart::where('user_id', auth()->id())
            ->where('product_id', $productId)
            ->exists()) {

            $this->dispatch(
                'message',
                text: 'Product Already Added',
                type: 'warning',
                status: 200
            );
            return;
        }

        if ($product->quantity <= 0) {
            $this->dispatch(
                'message',
                text: 'Out of Stock',
                type: 'warning',
                status: 404
            );
            return;
        }

        Cart::create([
            'user_id' => auth()->id(),
            'product_id' => $productId,
            'quantity' => 1,
        ]);

        // Livewire v3 event
        $this->dispatch('CartAddedUpdated');

        $this->dispatch(
            'message',
            text: 'Product Added to Cart',
            type: 'success',
            status: 200
        );
    }

    public function render()
    {
        return view('livewire.frontend.cart.add-to-cart');
    }
}

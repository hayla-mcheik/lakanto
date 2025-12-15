<?php

namespace App\Livewire\Frontend;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Wishlist;

class Indexwish extends Component
{
    public $product;
    public $IsInWishlist = false;

    public function mount()
    {
        if (Auth::check() && $this->product) {
            $this->IsInWishlist = Wishlist::where('user_id', auth()->id())
                ->where('product_id', $this->product->id)
                ->exists();
        }
    }

    public function addToWishList($productId)
    {
        if (!Auth::check()) {
            $this->dispatch(
                'message',
                text: 'Please Login to Continue',
                type: 'info',
                status: 401
            );
            return;
        }

        if (Wishlist::where('user_id', auth()->id())
            ->where('product_id', $productId)
            ->exists()) {

            $this->dispatch(
                'message',
                text: 'Already added to wishlist',
                type: 'warning',
                status: 409
            );
            return;
        }

        Wishlist::create([
            'user_id' => auth()->id(),
            'product_id' => $productId,
        ]);

        $this->IsInWishlist = true;
        $this->dispatch('wishlistAddedUpdated');

        $this->dispatch(
            'message',
            text: 'Wishlist Added successfully',
            type: 'success',
            status: 200
        );
    }

    public function render()
    {
        return view('livewire.frontend.indexwish');
    }
}

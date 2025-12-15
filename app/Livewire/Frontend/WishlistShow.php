<?php

namespace App\Livewire\Frontend;

use App\Models\Wishlist;
use Livewire\Component;

class WishlistShow extends Component
{
    public function removeWishlistItem($wishlistId)
    {
        Wishlist::where('user_id', auth()->id())
            ->where('id', $wishlistId)
            ->delete();

        $this->dispatch('wishlistAddedUpdated');

        $this->dispatch(
            'message',
            text: 'Wishlist Item Removed Successfully',
            type: 'success',
            status: 200
        );
    }

    public function render()
    {
        $wishlist = Wishlist::where('user_id', auth()->id())->get();

        return view('livewire.frontend.wishlist-show', [
            'wishlist' => $wishlist
        ]);
    }
}

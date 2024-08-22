<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product, $nama, $jumlah_pesanan, $nomor;

    public function mount($id)
    {
        $ProductDetail = Product::find($id);

        if ($ProductDetail) {
            $this->product = $ProductDetail;
        } else {
            abort(404);
        }
    }

    public function render()
    {
        return view('livewire.product-detail');
    }
}

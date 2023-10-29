<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index() {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create() {
        return view('products.add');
    }

    public function add(Request $request) {
        $data = $request->validate([
            'product' => 'required',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|numeric'
        ]);

        $newProduct = Product::create($data);

        return redirect(route('products.index'));
    }
}

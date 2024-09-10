<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view('index.product', [
            'products' => Product::getAllProducts()
            ->paginate(10)->withQueryString()
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|string',
            'name'  => 'required|string',
            'description'  => 'required|text',
            'price' => 'required|decimal',
            'image_url',
        ]);

        return response()->json(['message' => 'Product added to DB successfully']);
    }

    
}

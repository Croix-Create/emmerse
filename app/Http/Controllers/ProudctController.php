<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class ProudctController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|string',
            'name'  => 'required|string',
            'description'  => 'required|string',
            'price' => 'required|numeric',
            'image_url' => 'required|string',
        ]);

        return response()->json(['message' => 'Products created successfully']);
    }

    public function cart(Request $price) 
    {
        $price->validate([
            'id' => 'required|string',
            'price' => 'required|float',
            'image_url' => 'required|string'
        ]);
    }
}

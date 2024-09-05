<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|string',
            'name'  => 'required|string',
            'quantity', 'required|integer',
            'price' => 'required|decimal',
        ]);

        return response()->json(['message' => 'Products created successfully']);
    }
}

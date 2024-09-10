<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $cart)
    {
        $cart->validate([
            'product_id' => 'required|string',
            'name'  => 'required|string',
            'quantity', 'required|integer',
            'price' => 'required|decimal',
        ]);
    }

    public function checkout(Request $cart, $total) 
    {
        $total = $cart->price . $cart->quantity;

        return pay($cart, $total);
    }

    public function pay($cart, $total)
    {
        return view ('checkout.pay');
    }
}

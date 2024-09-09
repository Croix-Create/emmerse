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
            'description'  => 'required|text',
            'price' => 'required|decimal',
            'image_url',
        ]);

        return response()->json(['message' => 'Products created successfully']);
    }
    
}

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/products', [ProductController::class, 'index']);
Route::post('/api/cart', [CartController::class, '']);

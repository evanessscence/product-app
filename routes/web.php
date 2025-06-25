<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});
// Product routes
Route::resource('products', ProductController::class);

// Category routes
Route::resource('categories', CategoryController::class);
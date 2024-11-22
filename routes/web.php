<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', [CategoryController::class, 'home'])->name('home');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/products/category/{category}', [ProductController::class, 'filterByCategory'])->name('products.filter');
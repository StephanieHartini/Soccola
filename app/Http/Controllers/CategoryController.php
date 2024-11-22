<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('layouts.app', compact('categories', 'products'));
    }
    public function home(){
        return view('home');
    }

}
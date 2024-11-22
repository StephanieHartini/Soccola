<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Fetch categories and products from the database
        $categories = Category::all();
        $products = Product::all();

        // Pass the categories and products to the view
        return view('layouts.app', compact('categories', 'products'));
    }
    public function home(){
        return view('home');
    }

}
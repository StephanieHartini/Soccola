<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search(Request $req)
{
    $option = $req->query('option', 'All'); // Default to 'All' if option is not provided
    $search = $req->query('search', ''); // Default to empty string if search is not provided

    // Initialize query on the Product model
    $query = Product::query();

    // Apply search filter if search term is provided
    if (!empty($search)) {
        $query->where('name', 'like', "%{$search}%");
    }

    // Apply category filter if a specific option is selected
    if ($option !== 'All') {
        $query->where('category_id', $option);
    }

    // Execute the query
    $products = $query->get();
    $categories = Category::all();

    return view('posts.search', compact('products', 'categories'));
}


    public function filterByCategory($categoryName)
    {
        $products = Product::where('category_id', $categoryName)->get();

        $categories = Category::all();

        return view('posts.search', compact('products', 'categories', 'categoryName'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\CategoryPhoneAndr;
use App\Models\ProductAndr;
use App\Models\ProductPhoneAndr;
use Illuminate\Http\Request;

class ProductPhoneAndrController extends Controller
{
    // Add a new product to a specific category
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nameP' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'category_phone_andr_id' => 'required|exists:category_phone_andrs,id',
        ]);

        $product = ProductAndr::create($validated);

        return response()->json($product, 201);
    }

    // Display categories with their products
    public function index()
    {
        $categories = CategoryPhoneAndr::with('productPhoneAndrs')->get();

        return response()->json($categories);
    }

    // Filter products by category
    public function filterByCategory($categoryId)
    {
        $products = ProductAndr::where('category_phone_andr_id', $categoryId)->get();

        return response()->json($products);
    }
}

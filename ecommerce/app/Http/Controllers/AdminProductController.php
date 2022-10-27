<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function adminProduct()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    // Show the edit pag
    public function adminProductEdit()
    {
        return view('admin.products_edit');
    }

    // Receives request to update
    public function adminProductUpdate()
    {

    }

    // Show the creating pag
    public function adminProductCreate()
    {
        return view('admin.products_create');
    }

    // Receives request to create
    public function adminProductStore()
    {

    }
}

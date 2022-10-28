<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

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
    public function adminProductStore(Request $request)
    {
        $input = $request->validate([
            'name' => 'string|required',
            'price' => 'string|required',
            'stock' => 'integer|nullable',
            'cover' => 'file|nullable',
            'description' => 'string|nullable'
        ]);
        $input['slug'] = Str::slug($input['name']);

        if (!empty($input['cover']) && $input['cover']->isValid()) {
            $file = $input['cover'];
            $path = $file->store('public/products');
            $input['cover'] = $path;
        }

        Product::create($input);

        return Redirect::route('admin.products');
    }
}

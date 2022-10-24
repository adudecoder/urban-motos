<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function adminProduct()
    {
        return view('admin.products');
    }

    public function adminProductEdit()
    {
        return view('admin.products_edit');
    }
}

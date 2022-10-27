<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',  [IndexController::class, 'index'])->name('home');
Route::get('/product/{product:slug}',  [ProductController::class, 'product'])->name('product');

// admin Route
Route::get('/admin/products', [AdminProductController::class, 'adminProduct'])->name('admin.products');
Route::get('/admin/products/create', [AdminProductController::class, 'adminProductCreate'])->name('admin.product.create');
Route::post('/admin/products', [AdminProductController::class, 'adminProductStore'])->name('admin.product.store');
Route::get('/admin/products/{product}/edit', [AdminProductController::class, 'adminProductEdit'])->name('admin.product.edit');
Route::put('/admin/products/{product}', [AdminProductController::class, 'adminProductUpdate'])->name('admin.product.update');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProdutoController::class, 'edit'])->where('id', '[0-9]+');
Route::put('/products/{id}', [ProductController::class, 'update'])->where('id', '[0-9]+');
Route::patch('/products/{id}', [ProductController::class, 'update'])->where('id', '[0-9]+');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->where('id', '[0-9]+');
Route::get('/products/create', [ProductController::class, 'create']);

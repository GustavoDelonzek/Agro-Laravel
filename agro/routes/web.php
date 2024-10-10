<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);
Route::get('products/create',[ProductController::class, 'create'])->name('products.create');
Route::post('products',[ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->where('id', '[0-9]+')->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->where('id', '[0-9]+');
Route::patch('/products/{id}', [ProductController::class, 'update'])->where('id', '[0-9]+');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->where('id', '[0-9]+')->name('products.delete');


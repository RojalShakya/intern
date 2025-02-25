<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/category',[CategoryController::class,'index'])->name('category');
Route::post('/category',[CategoryController::class, 'store'])->name('category');
Route::get('/view-category',[CategoryController::class,'view'])->name('viewcategory');

Route::get('/product',[ProductController::class,'index'])->name('view-product');
Route::get('/product/create',[ProductController::class,'create'])->name('product');
Route::post('/product',[ProductController::class,'store'])->name('store');
Route::get('/product/edit/{ids}',[ProductController::class,'edit'])->name('edit-product');
Route::get('/product/edit/{ids}',[ProductController::class,'edit'])->name('edit-product');
Route::post('/product/edit/{ids}',[ProductController::class,'update'])->name('update-product');
Route::get('/product/delete/{ids}',[ProductController::class,'destroy'])->name('destroy-product');

<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\ProductController;


Route::group(['prefix'=>'product'],function(){
Route::get('/index', [ProductController::class, 'index'])->name('product.index');
Route::get('/edit/{Product}',[ProductController::class,'edit'])->name('Product.edit');
Route::get('/show',[ProductController::class,'show'])->name('Product.show');
Route::get('/create',[ProductController::class,'create'])->name('Product.create');
Route::get('/delete/{Product}',[ProductController::class,'destroy'])->name('Product.destroy');
Route::post('/update/{Product}',[ProductController::class,'update'])->name('Product.update');
Route::post('/store',[ProductController::class,'store'])->name('Product.store');

//      Route::resource('post',PostController::class);

});
use App\Http\Controllers\OrderController;


Route::group(['prefix'=>'order'],function(){
    Route::get('/index', [orderController::class, 'index'])->name('order.index');
    Route::get('/edit/{order}',[orderController::class,'edit'])->name('order.edit');
    Route::get('/show',[orderController::class,'show'])->name('order.show');
    Route::get('/create',[orderController::class,'create'])->name('order.create');
    Route::get('/delete/{order}',[orderController::class,'destroy'])->name('order.destroy');
    Route::post('/update/{order}',[orderController::class,'update'])->name('order.update');
    Route::post('/store',[orderController::class,'store'])->name('order.store');

//      Route::resource('post',PostController::class);

});

use App\Http\Controllers\CategoryController;


Route::group(['prefix'=>'category'],function(){
    Route::get('/index', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/edit/{category}',[CategoryController::class,'edit'])->name('category.edit');
    Route::get('/show',[CategoryController::class,'show'])->name('category.show');
    Route::get('/create',[CategoryController::class,'create'])->name('category.create');
    Route::get('/delete/{category}',[CategoryController::class,'destroy'])->name('category.destroy');
    Route::post('/update/{category}',[CategoryController::class,'update'])->name('category.update');
    Route::post('/store',[CategoryController::class,'store'])->name('category.store');

//      Route::resource('post',PostController::class);

});

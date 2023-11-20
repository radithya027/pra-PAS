<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProductController;
use App\Models\price;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
      "title" => "home",
    ]);
});

Route::get('/orders/all', [OrderController::class, 'index'])->name('orders.all');
Route::get('/order/detail/{order}', [OrderController::class, 'show']);
Route::get('/product/all', [ProductController::class, 'index'])->name('product.all');
Route::get('/product/detail/{product}', [ProductController::class, 'show']);
Route::get('/price/all', [PriceController::class, 'index'])->name('price.all');
Route::get('/price/detail/{price}', [PriceController::class, 'show']);
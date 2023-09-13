<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::post('/add-cart',[CartController::class,'add'])->name('cart.store');
Route::post('/add-update',[CartController::class,'update'])->name('cart.update');
Route::get('/cart-destroy/{id}', [CartController::class,'destroy'])->name('cart.destroy');
Route::get('/checkout', [PageController::class,'checkout'])->name('checkout');

Route::resource('products',ProductController::class);
Route::resource('units',UnitController::class);

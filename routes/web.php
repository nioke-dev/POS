<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// routes/web.php

// Halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Products
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage'])->name('food-beverage');
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth'])->name('beauty-health');
    Route::get('/home-care', [ProductController::class, 'homeCare'])->name('home-care');
    Route::get('/baby-kid', [ProductController::class, 'babyKid'])->name('baby-kid');
});

// Halaman User
Route::get('/user/{id}/name/{name}', [UserController::class, 'showProfile'])->name('user-profile');

// Halaman Penjualan
Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan');

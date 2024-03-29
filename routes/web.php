<?php

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

// ===========================
// ROUTING UNTUK LIEL KRISTEN
// ===========================
Route::get('/admin', function () {
    return view('admin.contoh');
});

// ===========================
// ROUTING UNTUK DAVID ISLAM
// ===========================
Route::get('/', function () {
    return view('client.home');
})->name('home');
Route::get('/detail-{product:name}', function () {
    return view('client.detail');
})->name('detail');

Route::get('/cart', function () {
    return view('client.cart');
})->name('cart');

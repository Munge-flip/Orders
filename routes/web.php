<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderController;

Route::get('/', [FrontController::class,'index'])->name('dashboard');
Route::resource('orders', OrderController::class);
Route::get('/', [OrderController::class, 'index']);
Route::get('/', function () {
    return view('home');
});
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
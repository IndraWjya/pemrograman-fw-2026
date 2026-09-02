<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\DashboardController;
 
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');


Route::get('/about', function () {
    return "Barokah Mart adalah toko kelontong yang telah melayani pelanggan sejak 2015.
    Kami berkomitmen menyediakan kebutuhan sehari-hari dengan harga terjangkau dan pelayanan ramah.";
})->name('about');
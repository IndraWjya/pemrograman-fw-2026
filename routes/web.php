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


use App\Http\Controllers\Auth\LoginController;
 
Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login');
 
Route::post('/login', [LoginController::class, 'store'])

    ->middleware('guest')
    ->name('login.store');
 
Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::get('/reports/sales', [ReportController::class, 'sales'])->name('report.sales');

    Route::get('/users', function () {
        return "Halaman Kelola Akun Kasir (Khusus Admin)";
    })->name('users.index');
});
 
Route::middleware(['auth', 'role:admin,kasir'])->group(function () {
    Route::get('/pos', [PosController::class, 'index'])->name('pos.index');
    Route::post('/pos', [PosController::class, 'store'])->name('pos.store');

    Route::get('/pos/history', function () {
        return "Halaman Riwayat Transaksi Saya";
    })->name('pos.history');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\PenggunaController;

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
    return redirect('/dashboard');
});

Auth::routes();

Route::middleware(['auth'])
->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });

    Route::resource('keuangan', KeuanganController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('pengguna', PenggunaController::class);


    // Route::get('/keuangan', function () {
    //     return view('/keuangan.index');
    // });

    // Route::get('/kategori', function () {
    //     return view('/kategori.index');
    // });

    // Route::get('/pengguna', function () {
    //     return view('/pengguna.index');
    // });

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

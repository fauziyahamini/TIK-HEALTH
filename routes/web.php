<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KategoriController;

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

Route::get('/', [BerandaController::class, 'index']);

Route::get('dashboard', function () {
    return view('dashboard');
});
Route::resource('artikel',ArtikelController::class);
Route::get('/delete/{id}', [ArtikelController::class, 'destroy']);

Route::resource('beranda',BerandaController::class);

Route::resource('user',UserController::class);
Route::get('/delete/{id}', [UserController::class, 'destroy']);

Route::resource('kategori',KategoriController::class);
Route::get('/delete/{id}', [KategoriController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

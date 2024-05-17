<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [BarangController::class, 'index']);

// Route::get('/barang', 'BarangController@index');
Route::get('/barang', [BarangController::class, 'index']);

Route::get('/tambah', [BarangController::class, 'TambahBarang']);

Route::post('/barang/simpanBarang', [BarangController::class, 'simpanBarang']);


// Route::get('/barang', function () {
//     return Redirect::away('http://google.com'); // berhasil untuk pindah ke website luar
//     // return Redirect::intended('index');
//     // return "Pengalihan";
// });

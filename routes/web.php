<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/home', [BlogController::class, 'home']);
Route::get('/post/{id}', [BlogController::class, 'show']);
Route::get('/about', [BlogController::class, 'about']);

// Route::get('/', function () {
//     return view('welcome');
// });

// // ini tempat ruting halamandua
// Route::get('/kedua', function () {
//     return view('halamandua');
// });
// // akhir dari ruting halamandua

// // ini tempat ruting halamantiga
// Route::get('/fitur', function () {
//     return view('fitur',['nama' => 'selamat datang']);
// });
// // akhir dari ruting halamantiga

// // ini tempat ruting halamandua
// Route::get('/product/{id}', function ($id) {
//     $product = [
//         'id' => $id,
//         'barang' => 'tiket',
//         'harga' => 100000
//     ];
//     return view('product', ['product' => $product]);
// });
// // akhir dari ruting halamandua
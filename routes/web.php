<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','welcome');
Route::resource('producto1s', App\http\Controllers\Producto1Controller::class);


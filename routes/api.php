<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/Producto1s', App\http\Controllers\Api\V1\Producto1Controller::class);

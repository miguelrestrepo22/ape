<?php

use App\Http\Controllers\ventasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ventas',[ventasController::class,'index'])->name('ventas.index');

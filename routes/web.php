<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ValentineController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [ValentineController::class, 'index'])->name('admin');
Route::post('/admin', [ValentineController::class, 'store']);
Route::get('/{name}', [ValentineController::class, 'show']);


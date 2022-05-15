<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/menus', [\App\Http\Controllers\MenuController::class, 'store'])->name('menus.store');
Route::get('/menus', [\App\Http\Controllers\MenuController::class, 'index']);
Route::get('/menus-show', [\App\Http\Controllers\MenuController::class, 'show']);

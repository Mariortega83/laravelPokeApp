<?php

//package, import
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FurnitureController;
use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

//defino las rutas
//1, página principal
Route::get('/', [MainController::class, 'main'])-> name('main');
//2,
Route::get('login', [MainController::class, 'login'])-> name('login');
//3
Route::get('logout', [MainController::class, 'logout'])-> name('logout');
//4: 7 rutas
Route::resource('product', ProductController::class);
//5: 7 rutas
Route::resource('furniture', FurnitureController::class);
//6: 7 rutas
Route::resource('pokemon', PokemonController::class);
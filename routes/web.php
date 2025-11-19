<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('portfolio', 'portfolio');

Route::get('/login',[AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login',[AuthController::class, 'performLogin'])->name('login');
Route::get('/register',[AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register',[AuthController::class, 'performRegister'])->name('register');

Route::post('/logout', function (){

});


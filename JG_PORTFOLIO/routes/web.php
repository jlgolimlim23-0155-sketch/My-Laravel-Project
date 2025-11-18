<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthController;
use App\http\Controllers\mainController;
route::get('/',[mainController::class,'index']);
Route::get('/', function () {
    return view('JP_PORTFOLIO');
});

Route::get('/register', [AuthController::class, 'showRegister' ]) ->name('register.form');
Route::post('/login', [AuthController::class, 'performlogin' ]) ->name('login.form');

Route::get('/register', [AuthController::class, 'showlogin' ]) ->name('login.form');
Route::post('/login', [AuthController::class, 'performlogin' ]) ->name('login');

Route::post('/logout', function(){
    
});

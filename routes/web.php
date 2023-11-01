<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('register', [RegisterController::class, 'show']);

// Route::post('register', [RegisterController::class, 'register'])->name('register');

Route::controller(RegisterController::class)->group(function () {
    Route::get('register', 'show')->name('register.show');
    Route::post('register', 'store')->name('register.store');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'show')->name('login.show');
    Route::post('login', 'login')->name('login.login');
});

Route::get('home', [HomeController::class, 'index'])->name('home.index');
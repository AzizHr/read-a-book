<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('login', [LoginController::class, 'show'])
    ->name('login.show');

Route::post('login', [LoginController::class, 'login'])
    ->name('login');

Route::get('register', [RegisterController::class, 'show'])
    ->name('register.show');

Route::post('register', [RegisterController::class, 'register'])
    ->name('register');

Route::post('/logout', LogoutController::class)
    ->name('logout');

Route::controller(ResetPasswordController::class)
    ->middleware('guest')
    ->group(function () {

    Route::get('/forgot-password', 'forgotPassword')
        ->name('password.request');

    Route::post('/forgot-password', 'sendEmail')
        ->name('password.email');

    Route::get('/reset-password/{token}', 'resetPassword')
        ->name('password.reset');

    Route::post('/reset-password', 'updatePassword')
        ->name('password.update');
});

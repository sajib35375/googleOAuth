<?php

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




Route::middleware('GoogleAuth')->group(function () {
    Route::get('/logout',[App\Http\Controllers\AuthController::class,'logout'])->name('logout');
});

Route::middleware('GoogleAuthNot')->group(function () {
    Route::get('dashboard',[App\Http\Controllers\AuthController::class,'dashboard'])->name('dashboard');
});

Route::get('/login',[App\Http\Controllers\AuthController::class,'login'])->name('login');
Route::get('google/login',[App\Http\Controllers\AuthController::class,'googleLogin'])->name('google.login');
Route::get('oauth/dashboard/callback',[App\Http\Controllers\AuthController::class,'googleOauth'])->name('google.oauth');



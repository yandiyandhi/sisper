<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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



Route::controller(LandingController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about', 'about');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index');
    Route::POST('/login', 'cek');
    Route::post('/logout', 'logout');
});

Route::middleware('auth')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'dashboard');
    });
    // Route::controller(UserController::class)->group(function(){
    //     // Route::post('/dashboard/listuser', 'delete');
    //     // Route::get('/dashboard/listuser', 'index');
    //     Route::resource('/dashboard/listuser');
    // });
    Route::resource('/dashboard/listuser', UserController::class)->except('show');
});

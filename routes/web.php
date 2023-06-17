<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Notifications;

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
|       s
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth', 'verified'])->group(function () {



    Route::post('/logout', [LoginController::class, 'destroy']);
    Route::get('/', [Controller::class, 'index']);
    Route::get('/acercanos', [Controller::class, 'acercanos']);
    Route::get('/contacto', [Controller::class, 'contacto']);
    Route::get('/notifications', [Notifications::class, 'index']);
    Route::post('/notifications', [Notifications::class, 'sendEmail']);
});
Route::middleware('guest')->group(function () {

    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'create']);
    Route::post('/login', [LoginController::class, 'store']);
});

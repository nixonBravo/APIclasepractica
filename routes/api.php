<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {
    Route::resources([
        'users' => UserController::class,
        'personas' => PersonaController::class,
    ]);

    Route::get('auth/logout', [AuthController::class, 'logoutUser']);
});

Route::controller(AuthController::class)->group(function () {
    Route::post('auth/register', 'createUser');
    Route::post('auth/login', 'loginUser');
});

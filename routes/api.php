<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('user/infos/{user_id}', [UserController::class, 'getInfos']);

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::middleware('auth:api')->group(function () {
    Route::get('user', [AuthController::class, 'me']);
    Route::post('logout', [AuthController::class, 'logout']);
});

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FavoritoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::middleware('auth:api')->group(function () {
    /**
     * Rotas de dados do usuário
     */
    Route::get('user/infos/{user_id}', [UserController::class, 'getInfos']);

    /**
     * Rotas de autenticação do usuário
     */
    Route::get('user', [AuthController::class, 'me']);
    Route::post('logout', [AuthController::class, 'logout']);

    /**
     * Rotas de favoritos
     */
    Route::post('favoritos', [FavoritoController::class, 'toggleFavorito']);
});

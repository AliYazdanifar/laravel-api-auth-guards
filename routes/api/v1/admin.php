<?php

use App\Http\Controllers\Api\v1\AdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('/v1/admin')->group(function () {
    Route::post('/auth/login', [AdminController::class, 'login']);

    Route::prefix('/auth')->middleware(['auth:sanctum'])->group(function () {
        Route::get('/me', [AdminController::class, 'me']);
        Route::get('/logout', [AdminController::class, 'logout']);
    });


    Route::get('/', [AdminController::class, 'index']);

//    Route::post('/logout', [AdminController::class, 'login'])
//        ->middleware('guest:admin')
//        ->name('logout');

});


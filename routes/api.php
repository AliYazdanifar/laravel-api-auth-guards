<?php

use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\Api\v1\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('/v1/auth/')->middleware(['auth:sanctum'])->group(function () {
    Route::get('me', function (Request $request) {
        return $request->user();
    });

    Route::get('logout',[AuthController::class,'logout']);
});

Route::prefix('v1')->group(function () {
    Route::get('/', [BlogController::class, 'index']);
});

Route::post('/v1/auth/login', [AuthController::class, 'login']);





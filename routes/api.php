<?php

use App\Http\Controllers\ServiceOrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('service_orders')->group(function () {
    Route::get('/', [ServiceOrderController::class, 'index']);
    Route::post('/', [ServiceOrderController::class, 'store']);
});

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/', [UserController::class, 'store']);
});

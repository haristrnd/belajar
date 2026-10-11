<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CameraController;   
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);

Route::apiResource('cameras', CameraController::class)->only(['index', 'store']);
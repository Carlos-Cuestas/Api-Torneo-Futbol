<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\MatchtController;
use App\Http\Controllers\ResultController;

Route::apiResource('teams', TeamController::class);
Route::apiResource('players', PlayerController::class);
Route::apiResource('matches', MatchtController::class);
Route::apiResource('results', ResultController::class);

<?php

use App\Http\Controllers\AccessController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// ===LOGIN LOGOUT SYSTEM===
Route::post("v1/auth/login", [AccessController::class, "login"]);
Route::get("v1/auth/logout", [AccessController::class, "logout"])->middleware('auth:sanctum');


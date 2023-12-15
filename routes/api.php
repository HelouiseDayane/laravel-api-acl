<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;




Route::apiResource('/permissions', PermissionController::class);
Route::apiResource('/users', UsersController::class);



Route::get('/', fn() => response()->json(['message' => 'ok']));
<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/{user}',[UsersController::class,'show']);
Route::post('/users', [UsersController::class,'store']);
Route::patch('/users/{user}', [UsersController::class,'update']);
Route::delete('/users/{user}', [UsersController::class,'destroy']);



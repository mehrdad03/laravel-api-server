<?php


use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')
    ->prefix('users')
    ->name('users')
    ->group(function () {
        Route::get('/', [UsersController::class, 'index'])->name('index');
        Route::get('/{user}', [UsersController::class, 'show'])->name('show');
        Route::post('/', [UsersController::class, 'store'])->name('store');
        Route::patch('/{user}', [UsersController::class, 'update'])->name('update');
        Route::delete('/{user}', [UsersController::class, 'destroy'])->name('destroy');
    });


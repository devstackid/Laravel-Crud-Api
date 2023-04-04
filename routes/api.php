<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;


// Route::get('/transaction', [TransactionController::class, 'index']);
// Route::post('/transaction', [TransactionController::class, 'store']);
// Route::put('/transaction/{id}', [TransactionController::class, 'update']);
// Route::get('/transaction/{id}', [TransactionController::class, 'show']);
// Route::delete('/transaction/{id}', [TransactionController::class, 'destroy']);

// Route::resource('/transaction', TransactionController::class)->except(['create', 'update']);

Route::resource('/transaction', TransactionController::class);

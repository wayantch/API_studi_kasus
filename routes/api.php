<?php

use App\Http\Controllers\Api\Admin\AuthController;
use App\Http\Controllers\Api\AddToCartController;
use App\Http\Controllers\Api\Admin\BookController;
use App\Http\Controllers\Api\Admin\CategoryController;
use App\Http\Controllers\Api\Admin\ProductController;
use App\Http\Controllers\Api\CheckoutController;
use App\Http\Controllers\Api\User\BookUserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\CustomerMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['middleware' => ['auth:sanctum', 'isAdmin'], 'prefix' => 'admin'], function () {
    // Categories
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::post('/categories', [CategoryController::class, 'store']);
    Route::get('/categories/{id}', [CategoryController::class, 'show']);
    Route::post('/categories/{id}', [CategoryController::class, 'update']);
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

    // Products
    Route::get('/books', [BookController::class, 'index']);
    Route::post('/books', [BookController::class, 'store']);
    Route::get('/books/{id}', [BookController::class, 'show']);
    Route::post('/books/{id}', [BookController::class, 'update']);
    Route::delete('/books/{id}', [BookController::class, 'destroy']);
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/books', [BookUserController::class, 'index']);
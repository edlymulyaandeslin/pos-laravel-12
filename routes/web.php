<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    Route::resource("users", UserController::class);
    Route::resource("customers", CustomerController::class);
    Route::resource("categories", CategoryController::class);
    Route::resource("products", ProductController::class);
    Route::resource("transactions", TransactionController::class);
    Route::resource("suppliers", SupplierController::class);
    Route::resource("purchases", PurchaseController::class);
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// public / guest routes
Route::get("/", [HomeController::class,"index"])->name('homepage');


// User routes
Route::prefix("user")->group(function(){
        
});
Route::prefix("admin")->group(function(){
    Route::get("/",[AdminController::class, "dashboard"])->name("admin.dashboard");
    Route::resources([
        'category' => CategoryController::class,
        "products" => ProductController::class,
    ]);
});


Route::get("/{category}/{slug}", [HomeController::class,"viewProduct"])->name('view.product');


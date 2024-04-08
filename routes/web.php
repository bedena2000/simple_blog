<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\Authentification;
use Laravel\Ui\AuthCommand;


// Main Page
Route::get('/', function() {
    return view('welcome');
});

// Authentification
Route::prefix('/auth')->group(function() {
    // Login
    Route::get('/login', function() {
        return view('login');
    })->name('loginPage');
    Route::post('/login', [AuthController::class, 'authUser'])->name('loginPage');
     
    // Register
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');
});

// Dashboard Page
Route::get('/dashboard', [DashboardController::class, 'show'])
    ->name('dashboard');

// Posts
Route::prefix('posts')->group(function() {
    // Get all blog posts
    Route::get('/', [PostsController::class, 'allPostPage'])->name('posts');
    // Get Single Post Page
    Route::get('/{postId}', [PostsController::class, 'singlePost'])->name('singlePost')->whereNumber('postId');
});








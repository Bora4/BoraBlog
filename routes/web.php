<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ApiKeyMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/posts', [PostsController::class, 'index'])->name('posts');
    Route::get('/posts/create', [PostsController::class, 'create'])->name('post.create');
    Route::get('/posts/{post}', [PostsController::class, 'show'])->name('post.show');
    Route::get('/posts/test', [PostsController::class, 'test'])->name('post.test');
    Route::post('/posts', [PostsController::class, 'store']);
});

Route::middleware(ApiKeyMiddleware::class)->group(function () {
    Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
    Route::get('/categories/create', [CategoriesController::class, 'create'])->name('post.create');
    Route::get('/categories/{post}', [CategoriesController::class, 'show'])->name('post.show');
    Route::get('/categories/test', [CategoriesController::class, 'test'])->name('post.test');
    Route::post('/categories', [CategoriesController::class, 'store']);
});


require __DIR__.'/auth.php';

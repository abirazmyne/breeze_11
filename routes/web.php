<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/post', [PostController::class, 'postr'])->name('post.store');
Route::get('/posts/returnone', [PostController::class, 'returnone'])->name('posts.returnone');
Route::get('/posts/returntwo', [PostController::class, 'returntwo'])->name('posts.returntwo');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

});

Route::middleware(['auth', 'role:agent'])->group(function () {
    Route::get('/agent/dashboard', [AgentController::class, 'dashboard']);
});


require __DIR__.'/auth.php';

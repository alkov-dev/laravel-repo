<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::inertia('/', 'welcome')->name('home');


// Route::get('/', [PostController::class, 'index'])->name('post.index');
// Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');


Route::resource('posts', PostController::class);

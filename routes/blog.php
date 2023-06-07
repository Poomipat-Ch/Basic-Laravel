<?php

use App\Http\Controllers\Blog;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/blog', [Blog::class, 'index'])->name('blog');
});

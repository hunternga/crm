<?php

use Illuminate\Support\Facades\Route;

Route::get('control-panel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('blogs.landing');
});

Route::get('page', function () {
    return view('blogs.page');
});

Route::get('post', function () {
    return view('blogs.post');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/admin-blog', function () {
        return view('admin.blogs-list');
    })->name('blogs');
});
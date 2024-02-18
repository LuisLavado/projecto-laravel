<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/blog', function () {
    // consulta a la base de datos
    $posts = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel']
    ];

    return view('blog', ['posts' => $posts]);
})->name('blog');

Route::get('/blog/{word}', function ($word) {
    // consulta a la base de datos
    $post = $word;
    return view('post', ['post' => $post]);
})->name('post');


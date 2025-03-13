<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});


Route::get('/posts', function () {
    return view('posts');

});

Route::get('/projects', function () {
    return view('projects');

});
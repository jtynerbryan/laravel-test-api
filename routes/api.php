<?php

// Auth Routes
Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');

// protected routes
Route::middleware('auth:api')->group(function () {
    Route::apiResource('users', 'UsersController');
    Route::get('users/{user}/posts', 'UsersController@posts');
    Route::apiResource('posts', 'PostsController');
});

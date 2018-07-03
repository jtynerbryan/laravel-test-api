<?php

// Auth Routes
Route::post('register', 'AuthController@register');

Route::middleware('auth:api')->group(function () {
    Route::apiResource('users', 'UsersController');
    Route::get('users/{user}/posts', 'UsersController@posts');
    Route::apiResource('posts', 'PostsController');
});

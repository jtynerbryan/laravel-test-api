<?php

use App\User;
use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('users', 'UsersController');
Route::get('users/{user}/posts', 'UsersController@posts');
Route::apiResource('posts', 'PostsController');

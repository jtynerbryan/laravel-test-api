<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function () {
    return json_encode(['name' => 'Jesse Tyner-Bryan', 'age' => 30, 'email' => 'jesse.tyner-bryan@gmail.com']);
});

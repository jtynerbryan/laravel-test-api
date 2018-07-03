<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);

        return response()->json($user, 201);

    }
}

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

        $request->password = Hash::make($request->password);

        $user = User::create($request->all());

        $token = $user->createToken('Token Name')->accessToken;

        $data = ['user' => $user, 'access_token' => $token];

        return response()->json($data, 201);

    }
}

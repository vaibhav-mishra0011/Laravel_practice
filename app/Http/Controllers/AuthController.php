<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }
        $request->session()->regenerate();
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        Auth::logout();
    }
    
    public function me(Request $request)
    {
        return response()->json([
            'data' => $request->user(),
        ]);
    }
}

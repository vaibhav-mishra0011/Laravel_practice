<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
      
        $user = User::where(
            "email",
            $request->email
        )->first();
        if (!$user) {
            return redirect()->back()->with("error", "user not found");
        } else {
            return view('tasks.index');
        }

    }
}

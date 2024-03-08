<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('top');
        }

        // Handle login failure, show error message, and redirect back to login
        return redirect()->route('login')->with('error', 'Login failed. Please check your credentials.') 
    }
}

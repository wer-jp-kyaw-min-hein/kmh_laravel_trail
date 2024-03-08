<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('change_password');
    }

    public function savePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->input('password'));
        $user->save();
        
        // Implement logic for changing password based on the specifications
        return redirect()->route('account.management')->with('success', 'Password changed successfully.')
    }
}

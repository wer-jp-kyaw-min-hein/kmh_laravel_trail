<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;


class AddNewAccountController extends Controller
{
    public function index()
    {
        return view('add_new_account');
    }

    public function saveAccount(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users, email',
            'password' => 'required|string|min:8|confirmed',
            // Add other validation rules for user creation
        ]);

        $user = new User();
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        // Set other attributes for the user based on your form

        $user->save();
        // Implement logic for saving a new account based on the specifications
        return redirect()->route('account.management')->with('success', 'New account added successfully.');
    }
}

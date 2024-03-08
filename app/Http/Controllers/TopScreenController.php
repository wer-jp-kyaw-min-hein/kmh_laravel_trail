<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class TopScreenController extends Controller
{
    public function idnex()
    {
        return view('top');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    // Add other functionality methods
}

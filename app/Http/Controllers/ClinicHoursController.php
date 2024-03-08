<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClinicHoursController extends Controller
{
    public function index()
    {
        return view('clinic_hours');
    }
    // Add methods for clinic hours functionality
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function redirects()
    {
        // Ensure user is authenticated before accessing Auth::user()
        if (Auth::check()) {
            $usertype = Auth::user()->usertype; // Fixed variable reference

            if ($usertype == '1') { // Corrected comparison
                return view('admine.admin');
            } else {
                return view('home');
            }
        } else {
            // Handle the case when the user is not authenticated
            return redirect()->route('login');
        }
    }
}

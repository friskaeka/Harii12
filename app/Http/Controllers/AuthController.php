<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view ('register');
    }

    public function index()
    {
        return view ('index');
    }

    public function form(request $request)
    {
        $first = $request -> nama1;
        $last = $request -> nama2;
        
        return view('index', compact('first', 'last'));
    }
}

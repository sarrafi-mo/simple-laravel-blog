<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
       dd('authenticate');
    }

    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
       dd('store');
    }

    public function logout()
    {
        dd('logout');
    }

}

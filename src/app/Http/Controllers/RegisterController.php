<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        return view('register');
    }

    public function login(Request $request)
    {
        return view ('login');
    }


}

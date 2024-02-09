<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        

    }

    public function register(Request $request)
    {
       
    }

    public function logout(Request $request)
    {
      
    }
}

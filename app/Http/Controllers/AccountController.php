<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index() {
        return view('login');
    }
    public function Register() {
        return view('register');
    }
}
 
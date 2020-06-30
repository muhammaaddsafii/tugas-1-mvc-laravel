<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('form.blade.php');
    }

    public function welcome(){
        return view('welcome2.blade.php');
    }
}

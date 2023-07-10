<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    // index
    public function index()
    {
        $data = [   'title' => 'Login Administrator'];
        return view('login/index',$data);
    }

    // hai
    public function logout()
    {
        
    }
}

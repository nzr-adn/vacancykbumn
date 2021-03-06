<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->__route = 'auth.login';
    }

    public function index()
    {
        return view($this->__route, [
            'title' => 'Login',
        ]);
    }
}

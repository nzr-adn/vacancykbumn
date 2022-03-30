<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->__route = 'auth.register';
    }

    public function index()
    {
        return view($this->__route, [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request)
    {
        
    }
}

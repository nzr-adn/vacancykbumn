<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function __construct()
    {
        $this->__route = 'landing.contactus';
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        return view($this->__route,[
            'pagetitle' => 'Contact US',

            'breadcrumb' => [

            ],
            // 'user_guide' => asset($this->userguidefile_url.@$user_guide->filename)

        ]);
    }
}

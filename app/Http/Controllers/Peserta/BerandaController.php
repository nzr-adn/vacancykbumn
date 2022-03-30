<?php

namespace App\Http\Controllers\Peserta;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function __construct()
    {
        $this->__route = 'peserta.beranda';
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view($this->__route,[
            'pagetitle' => 'Beranda',

            'breadcrumb' => [

            ],
        ]);
    }
}

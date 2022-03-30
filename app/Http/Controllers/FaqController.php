<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    // public function __construct()
    // {
    //     $this->__route = 'landing.faq';
    //     //$this->userguidefile_url = Config::get('folder.userguidefile_url');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //activity()->log('Dashboard');

        //app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        // $id_users = \Auth::user()->id;
        // $users = User::where('id', $id_users)->first();
        // $user_guide = UserGuide::select('*')->orderBy('created_at', 'desc')->first();

        // if($users->kategori_user_id == 1){
        //     $index = 'index';
        // } elseif ($users->kategori_user_id == 2) {

        //     $index = 'index2';
        // } else {
        //     $index = 'index2';
        // }

        return view($this->__route ,[
            'pagetitle' => 'FAQ',
            // 'perusahaan' => Perusahaan::orderBy('id', 'asc')->get(),
            // 'talenta' => Talenta::orderBy('nama_lengkap', 'asc')->get(),
            'breadcrumb' => [

            ],
            // 'user_guide' => asset($this->userguidefile_url.@$user_guide->filename)

        ]);
    }
}

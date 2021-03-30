<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'siswa' => Siswa::count(),
            'user' => User::count(),
            'rpl' => DB::table('siswas')->where('jurusan', 'RPL')->count(),
            'tkj' => DB::table('siswas')->where('jurusan', 'TKJ')->count(),
            'mmd' => DB::table('siswas')->where('jurusan', 'MMD')->count()
        ]);
    }

}

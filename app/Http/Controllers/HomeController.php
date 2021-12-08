<?php

namespace App\Http\Controllers;

use App\Models\M_Mahasiswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() //cek session login
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
        $data = M_Mahasiswa::all();
        return view('index')->with([
            'data' => $data
        ]);
    }
}

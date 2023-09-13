<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function petugas(){
        return view('TablePetugas');
    }

    public function kelas(){
        return view('TableKelas');
    }

    public function spp(){
        return view('TableSpp');
    }

    public function history(){
        return view('TableHistory');
    }
}

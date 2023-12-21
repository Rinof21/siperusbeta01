<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index(){
    $ruangan=Ruangan::get();
    return View('ruangan.kelolaruangan', compact('ruangan'));
    }


    public function tambahruangan()
    {
        return view('ruangan.tambahruangan');
    }
}


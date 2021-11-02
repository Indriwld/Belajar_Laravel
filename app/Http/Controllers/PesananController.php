<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;

class PesananController extends Controller
{
    public function tampilkan()
    {

        $psn = Pesanan::all();

        return view('Pesanan', compact('psn'));
    }
}

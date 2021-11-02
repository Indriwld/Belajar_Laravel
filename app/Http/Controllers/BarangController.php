<?php

namespace App\Http\Controllers;

use App\Models\Barang;

class BarangController extends Controller
{
    public function tampilkan()
    {

        $brg = Barang::all();

        return view('barang', compact('brg'));
    }
}

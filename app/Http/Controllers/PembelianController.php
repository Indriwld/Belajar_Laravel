<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;

class PembelianController extends Controller
{
    public function tampilkan()
    {

        $query = Pembelian::all();

        return view('pembelian', compact('query'));
    }
}

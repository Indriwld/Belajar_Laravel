<?php

namespace App\Http\Controllers;

use App\Models\Suplier;

class SuplierController extends Controller
{
    public function tampilkan()
    {

        $sup = Suplier::all();

        return view('Suplier', compact('sup'));
    }
}

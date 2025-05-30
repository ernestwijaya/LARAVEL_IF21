<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $mahasiswaprodi  = DB::select(query:
            'Select prodi.nama, COUNT(*) as jumlah
            FROM mahasiswas JOIN prodi ON mahasiswas,
            prodi_id = prodi.id
            GROUP BY prodi.nama'
        );

        $mahasiswaasalsma = DB::select(query:
        'SELECT asal_sma'
    );




        return view('dashboard.index');
    }
}

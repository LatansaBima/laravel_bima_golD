<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        $nama = 'Halo Gueh Latansa Bima Amanta';
        return view('belajar', ['nama' => $nama]);
    }

    function biodata()
    {
        $nama = 'Latansa Bima Amanta';
        $matkul = ['Web Application', 'Mobile Application', 'Struktur Data'];
        return view('biodata', compact('nama', 'matkul'));
    }
    
    function getNama($nama)
    {
        return $nama;
    }

    function pendaftaran()
    {
        return view('pendaftaran');
    }

    function proses(Request $request)
    {
        $nama = $request->nama;
        $alamat = $request->alamat;
        return 'Nama : ' . $nama . ' <br>Alamat : ' . $alamat;
    }
}

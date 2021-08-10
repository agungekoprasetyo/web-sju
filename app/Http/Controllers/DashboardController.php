<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function mobil()
    {
        return view('asuransi-mobil');
    }

    public function motor()
    {
        return view('asuransi-motor');
    }

    public function rumah()
    {
        return view('asuransi-rumah');
    }

    public function kesehatan()
    {
        return view('asuransi-kesehatan');
    }

    public function jaminan()
    {
        return view('asuransi-jaminan');
    }

    public function kecelakaan()
    {
        return view('asuransi-kecelakaan');
    }

    public function faq()
    {
        return view('faq');
    }

    public function tentangkami()
    {
        return view('tentang-kami');
    }

    public function produk()
    {
        return view('produk');
    }

    public function artikel()
    {
        return view('artikel');
    }

    public function klaimproduk()
    {
        return view('klaim-produk');
    }
}

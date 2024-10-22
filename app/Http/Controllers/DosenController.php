<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $nama = 'Muhammad Firly Al Faridzi';
        $kelas = 'XII PPLG';
        $pelajaran = ['Matematika', 'PJOK', 'Agama Islam'];
        return view('blog', ['nama' => $nama, 'kelas' => $kelas, 'mapel' => $pelajaran]);
    }
}

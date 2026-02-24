<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::getAll();
        return view('mahasiswa.index', compact('data'));
    }
}
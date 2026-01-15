<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index()
    {
        $pengalaman = \App\Models\Pengalaman::orderBy('tahun', 'desc')->get();
        return view('profile', compact('pengalaman'));
    }
}

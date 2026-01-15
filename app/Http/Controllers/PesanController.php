<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function store(Request $request)
    {
        Pesan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan
        ]);
        return redirect()->back()->with('success', 'Pesan Berhasil dikirim');
    }

    public function admin()
    {
        $pesan = Pesan::all();
        return view('admin.pesan', compact('pesan'));
    }
}

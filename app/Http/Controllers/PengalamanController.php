<?php

namespace App\Http\Controllers;

use App\Models\Pengalaman;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    // Tampilkan daftar pengalaman
    public function index()
    {
        $pengalaman = Pengalaman::orderBy('tahun', 'desc')->get();
        return view('admin.pengalaman.index', compact('pengalaman'));
    }

    // Form tambah pengalaman
    public function create()
    {
        return view('admin.pengalaman.create');
    }

    // Simpan pengalaman baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:225',
            'deskripsi' => 'required|string',
            'tahun' => 'nullable|string|max:50'
        ]);

        Pengalaman::create($request->all());

        return redirect()->route('admin.pengalaman.index')->with('success', 'Pengalaman berhasil ditambah');
    }

    // Form edit pengalaman
    public function edit($id)
    {
        $pengalaman = Pengalaman::findOrFail($id);
        return view('admin.pengalaman.edit', compact('pengalaman'));
    }

    // Update pengalaman
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:225',
            'deskripsi' => 'required|string',
            'tahun' => 'nullable|string|max:50'
        ]);

        $pengalaman = Pengalaman::findOrFail($id);
        $pengalaman->update($request->all());

        return redirect()->route('admin.pengalaman.index')->with('success', 'Pengalaman berhasil diupdate');
    }

    // Hapus pengalaman
    public function destroy($id)
    {
        Pengalaman::findOrFail($id)->delete();
        return redirect()->route('admin.pengalaman.index')->with('success', 'Pengalaman berhasil dihapus');
    }
}

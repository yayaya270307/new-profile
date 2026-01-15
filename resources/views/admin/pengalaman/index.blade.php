@extends('layouts.app')

@section('title', 'Daftar Pengalaman')

@section('content')
<div class="container py-5">
    <h2 class="mb-4" style="padding-top: 3rem">Pengalaman</h2>
    <a href="{{ url('/') }}" class="btn btn-outline-secondary rounded-pill">
        <i class="bi bi-arrow-left"></i> Kembali ke profile </a>
    <a href="{{ route('admin.pengalaman.create') }}" class="btn btn-outline-secondary rounded-pill">Tambah pengalaman</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tahun</th>
                <th>Tombol</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengalaman as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->judul }}</td>
                <td>{{ $p->deskripsi }}</td>
                <td>{{ $p->tahun }}</td>
                <td>
                    <a href="{{ route('admin.pengalaman.edit', $p->id) }}" class="btn btn-sm btn-warning me-1">Edit</a>

                    <form action="{{ route('admin.pengalaman.destroy', $p->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

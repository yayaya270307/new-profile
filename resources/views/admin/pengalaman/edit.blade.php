@extends('layouts.app')

@section('title', 'Edit Pengalaman')

@section('content')
<div class="container py-5" >
    <h2 class="mb-4" style="padding-top: 3rem">Edit Pengalaman</h2>

    <form action="{{ route('admin.pengalaman.update', $pengalaman->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $pengalaman->judul }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4">{{ $pengalaman->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Tahun</label>
            <input type="text" name="tahun" class="form-control" value="{{ $pengalaman->tahun }}">
        </div>

        <button class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('admin.pengalaman.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

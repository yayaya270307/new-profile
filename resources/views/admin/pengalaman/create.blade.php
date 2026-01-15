@extends('layouts.app')

@section('title', 'Tambah Pengalaman')

@section('content')
<div class="container mt-5" style="padding-top: 3rem">
    <h2 class="mb-4">Tambah Pengalaman</h2>

    <form action="{{ route('admin.pengalaman.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ old('judul') }}" required>
            @error('judul')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Tahun</label>
            <input type="text" name="tahun" class="form-control" value="{{ old('tahun') }}">
            @error('tahun')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4" required>{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.pengalaman.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

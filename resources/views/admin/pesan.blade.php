@extends('layouts.app')

@section('title', 'Pesan Masuk')

@section('content')
<div class="container mt-5" style="padding-top: 3rem">
    <h2 class="mb-4">Pesan Masuk</h2>
    <a href="{{ url('/') }}" class="btn btn-outline-secondary rounded-pill">
        <i class="bi bi-arrow-left"></i> Kembali ke profile
    </a>
    <div class="table-responsive">
        <table class="table table-bordered align-top">
            <thead class="table-light">
                <tr>
                    <th width="20%">Nama</th>
                    <th width="30%">Email</th>
                    <th width="50%">Pesan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pesan as $m)
                    <tr>
                        <td>{{ $m->nama }}</td>
                        <td>{{ $m->email }}</td>
                        <td style="white-space: pre-wrap;">{{ $m->pesan }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Belum ada pesan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

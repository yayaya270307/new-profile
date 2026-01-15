@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')

<section class="jumbotron text-center">
    <div class="container">
        <img src="{{ asset('images/yayaya.jpg') }}" class="profile-circle">
        <h1 class="display-6">PORTOFOLIO</h1>

        <p class="lead text-muted mb-2">
            Mahasiswa Universitas Djuanda | Fakultas Ilmu Komputer
        </p>

        <small class="text-uppercase fw-semibold text-muted d-block mb-2">
            Skills
        </small>

        <div class="d-flex justify-content-center gap-2 flex-wrap">
            <span class="skill-tag">HTML</span>
            <span class="skill-tag">CSS</span>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<section id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 text-center mb-4">
                <img src="{{ asset('images/poster.png') }}" class="img-fluid" style="max-height:260px;">
            </div>
            <div class="col-md-7">
                <h2 class="mb-3">Tentang Saya</h2>
                <div class="mb-3">
                    <a href="https://www.instagram.com/y2ung._?igsh=MThqYnJhODNyYmZpZw==" target="_blank" class="text-dark me-3">
                        <i class="bi bi-instagram fs-4"></i>
                    </a>

                    <a href="https://github.com/yayaya270307" target="_blank" class="text-dark me-3">
                        <i class="bi bi-github fs-4"></i>
                    </a>

                    <a href="https://www.linkedin.com/in/lia-nur-alawiah-wahdah-9a6558393/" target="_blank" class="text-dark">
                        <i class="bi bi-linkedin fs-4"></i>
                    </a>
                </div>
                <p class="text-secondary">
                    saat ini Merupakan salah satu mahasiswa semester 1 di Universitas Djuanda Bogor, Fakultas Ilmu Komputer. 
                    Saya memiliki minat yang besar dalam bidang teknologi informasi dan pengembangan perangkat lunak. 
                    Saya tertarik dalam pengeloaan data dan analisis data. Saya juga memiliki kemampuan dalam manajemen waktu
                    serta kerja tim. Saya selalu berusaha untuk belajar hal hal baru dan mengembangkan keterampilan saya.
                </p>
                <p class="text-secondary">
                    2025 - saat ini : Mahasiswa Universitas Djuanda Bogor, Fakultas Ilmu Komputer 
                </p>
                <p class="text-secondary">
                    2022 - 2025     : SMKS Amaliah 1 & 2 Ciawi, jurusan Rekayasa Perangkat Lunak
                </p>
                <p class="text-secondary">
                    2019 - 2022     : SMPN 2 Ciawi
                </p>
            </div>
        </div>
    </div>
</section>

<div class="section-divider"></div>

<section id="experience">
    <div class="container">
        <h2 class="text-center mb-4">Pengalaman</h2>

        @if($pengalaman->isEmpty())
            <p class="text-center text-muted">Belum ada pengalaman yang ditambahkan</p>
        @else
            <div class="row g-3">
                @foreach($pengalaman as $alam)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $alam->judul }}</h5>
                                @if($alam->tahun)
                                    <small class="text-muted">{{ $alam->tahun }}</small>
                                @endif
                                <p class="card-text mt-2">{{ $alam->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

<div class="section-divider"></div>
<section id="minat">
    <div class="container">
        <h2 class="text-center mb-4">Minat</h2>
        <div class="row g-3">

            <div class="col-6 col-md-3">
                <div class="card h-100">
                    <div class="p-2">
                        <img src="{{ asset('images/data.jpg') }}" class="card-img-top rounded-3">
                    </div>
                    <div class="card-body text-center p-3">
                        <h6 class="fw-bold mb-1">DATA</h6>
                        <p class="text-muted small mb-0">Menyusun logika & solusi</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card h-100">
                    <div class="p-2">
                        <img src="{{ asset('images/projek.jpg') }}" class="card-img-top rounded-3">
                    </div>
                    <div class="card-body text-center p-3">
                        <h6 class="fw-bold mb-1">PROJECT MANAGER</h6>
                        <p class="text-muted small mb-0">Mengatur alur kerja</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card h-100">
                    <div class="p-2">
                        <img src="{{ asset('images/writer.jpeg') }}" class="card-img-top rounded-3">
                    </div>
                    <div class="card-body text-center p-3">
                        <h6 class="fw-bold mb-1">COPYWRITER</h6>
                        <p class="text-muted small mb-0">Menyusun kata efektif</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card h-100">
                    <div class="p-2">
                        <img src="{{ asset('images/badmin.jpg') }}" class="card-img-top rounded-3">
                    </div>
                    <div class="card-body text-center p-3">
                        <h6 class="fw-bold mb-1">BADMINTON</h6>
                        <p class="text-muted small mb-0">Menjaga kebugaran</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="kotak pesan">
    <div class="container">
        <div class="text-center mb-4">
            <h2>Kirim Pesan</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('kontak.kirim') }}" class="p-4 bg-white rounded-4 shadow-sm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Pesan</label>
                        <textarea name="pesan" class="form-control" rows="4"></textarea>
                    </div>
                    <button class="btn-main w-100">Kirim Sekarang</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

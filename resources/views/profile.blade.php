@extends('layouts.app')

@section('content')
<div class="row justify-content-center py-4">
    <div class="col-lg-10">
        <div class="bg-dark text-white p-5 rounded-4 mb-4 text-center shadow-sm position-relative overflow-hidden" style="background: linear-gradient(135deg, #212529 0%, #1a1e21 100%) !important;">
            <span class="badge bg-warning text-dark fw-bold px-3 py-2 rounded-pill mb-3">
                📖 Tentang Platform
            </span>
            <h2 class="fw-bold display-6 mb-2">Portal Resep Masakan</h2>
            <p class="text-muted lead fs-6 mx-auto mb-0" style="max-width: 650px;">
                Platform digital interaktif yang menyajikan panduan memasak kuliner Nusantara secara ringkas, praktis, dan dilengkapi dengan estimasi biaya bahan masakan.
            </p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center">
                    <div class="fs-1 mb-3">🍲</div>
                    <h5 class="fw-bold text-dark mb-2">Resep Autentik</h5>
                    <p class="text-muted small mb-0">
                        Kumpulan resep masakan Nusantara dari berbagai daerah yang dirancang agar mudah dipraktikkan di rumah.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center">
                    <div class="fs-1 mb-3">💰</div>
                    <h5 class="fw-bold text-dark mb-2">Estimasi Biaya</h5>
                    <p class="text-muted small mb-0">
                        Setiap resep dilengkapi estimasi harga bahan baku untuk membantu merencanakan anggaran memasak harian.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center">
                    <div class="fs-1 mb-3">⚡</div>
                    <h5 class="fw-bold text-dark mb-2">Pencarian Cepat</h5>
                    <p class="text-muted small mb-0">
                        Fitur pencarian responsif untuk menemukan resep favorit berdasarkan nama masakan, kategori, maupun bahan baku.
                    </p>
                </div>
            </div>
        </div>

        <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
            <h4 class="fw-bold text-dark mb-3 text-center">Tujuan Pengembang Website</h4>
            <p class="text-muted text-center mb-4">
                Website ini dirancang untuk memberikan kemudahan bagi siapa saja yang ingin belajar memasak atau mencari inspirasi menu harian dengan informasi bahan dan tahapan pembuatan yang terstruktur secara rapi dan estetik.
            </p>

            <div class="text-center pt-2">
                <a href="{{ url('/') }}" class="btn btn-dark btn-sm rounded-pill px-4 py-2 fw-medium shadow-sm">
                    &larr; Jelajahi Resep Masakan
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
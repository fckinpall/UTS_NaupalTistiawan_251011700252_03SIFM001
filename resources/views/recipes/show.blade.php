@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="mb-4">
            <a href="{{ url('/') }}" class="btn btn-outline-dark btn-sm rounded-pill px-3 shadow-sm d-inline-flex align-items-center gap-1">
                &larr; Kembali ke Daftar Resep
            </a>
        </div>

        <div class="card shadow-sm border-0 rounded-4 overflow-hidden bg-white">
            <div class="position-relative">
                <img src="{{ asset('assets/images/' . $recipe->image) }}" class="card-img-top" alt="{{ $recipe->name }}" style="max-height: 420px; object-fit: cover; width: 100%;">
                <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                    <span class="badge bg-warning text-dark fw-bold px-3 py-2 rounded-pill mb-2">
                        {{ $recipe->category }}
                    </span>
                    <h1 class="text-white fw-bold display-6 mb-0">{{ $recipe->name }}</h1>
                </div>
            </div>

            <div class="card-body p-4 p-md-5">
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center gap-3 bg-light p-3 rounded-4 border border-light h-100">
                            <span class="fs-3">💰</span>
                            <div>
                                <small class="text-muted d-block">Estimasi Harga Bahan</small>
                                <strong class="text-success fs-5">Rp {{ number_format($recipe->price, 0, ',', '.') }}</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center gap-3 bg-light p-3 rounded-4 border border-light h-100">
                            <span class="fs-3">⏱️</span>
                            <div>
                                <small class="text-muted d-block">Estimasi Waktu Memasak</small>
                                <strong class="text-dark fs-5">{{ $recipe->cook_time }}</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4 p-4 rounded-4 bg-light border border-light">
                    <h5 class="fw-bold text-dark mb-2">📝 Deskripsi Menu</h5>
                    <p class="text-secondary mb-0" style="line-height: 1.8;">
                        {{ $recipe->description }}
                    </p>
                </div>

                <div class="row g-4">
                    <div class="col-md-5">
                        <div class="p-4 rounded-4 bg-light h-100 border border-light">
                            <h5 class="fw-bold text-dark mb-3 d-flex align-items-center gap-2">
                                <span>🛒</span> Bahan-bahan
                            </h5>
                            <p class="text-secondary mb-0" style="white-space: pre-line; line-height: 1.8;">
                                {{ $recipe->ingredients }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="p-4 rounded-4 bg-light h-100 border border-light">
                            <h5 class="fw-bold text-dark mb-3 d-flex align-items-center gap-2">
                                <span>👩‍🍳</span> Langkah Pembuatan
                            </h5>
                            <div class="text-secondary" style="line-height: 1.8;">
                                {!! nl2br(e($recipe->steps)) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
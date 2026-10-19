@extends('layouts.app')

@section('content')
<div class="row mb-5">
    <div class="col-lg-10 mx-auto text-center py-5 px-4 rounded-4 bg-dark text-white shadow-sm position-relative overflow-hidden" style="background: linear-gradient(135deg, #212529 0%, #1a1e21 100%) !important;">
        <span class="badge bg-warning text-dark fw-bold px-3 py-2 rounded-pill mb-3">
            ✨ Kuliner Nusantara Pilihan
        </span>
        <h1 class="fw-bold display-5 mb-3">Selamat Datang di Portal Resep Masakan</h1>
        <p class="text-white-50 lead fs-6 mb-4 mx-auto" style="max-width: 650px;">
            Temukan berbagai resep masakan Nusantara praktis, lezat, dan autentik yang dilengkapi dengan estimasi biaya bahan baku.
        </p>
        <div class="d-flex justify-content-center gap-3">
            <a href="{{ route('recipes.index') }}" class="btn btn-warning btn-lg rounded-pill px-4 fw-semibold text-dark">
                Lihat Semua Resep &rarr;
            </a>
            <a href="{{ route('profile') }}" class="btn btn-outline-light btn-lg rounded-pill px-4">
                Tentang Portal
            </a>
        </div>
    </div>
</div>

<div class="mb-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold text-dark mb-1">🔥 Resep Unggulan</h4>
            <p class="text-muted small mb-0">Beberapa resep terpopuler yang siap Anda coba di rumah.</p>
        </div>
        <a href="{{ route('recipes.index') }}" class="btn btn-outline-dark btn-sm rounded-pill px-3">
            Lihat Semua ({{\App\Models\Recipe::count()}})
        </a>
    </div>

    <div class="row g-4">
        @foreach($featuredRecipes as $recipe)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden transition-card">
                <div class="position-relative overflow-hidden">
                    <img src="{{ asset('assets/images/' . $recipe->image) }}" class="card-img-top" alt="{{ $recipe->name }}" style="height: 200px; object-fit: cover;">
                    <span class="position-absolute top-0 end-0 m-3 badge bg-dark bg-opacity-75 px-3 py-2 rounded-pill">
                        {{ $recipe->category }}
                    </span>
                </div>
                <div class="card-body p-4 d-flex flex-column justify-content-between">
                    <div>
                        <h5 class="card-title fw-bold text-dark mb-1">{{ $recipe->name }}</h5>
                        <div class="text-success fw-bold fs-6 mb-2">
                            Rp {{ number_format($recipe->price, 0, ',', '.') }}
                        </div>
                        <p class="card-text text-muted small mb-3">
                            {{ Str::limit($recipe->description, 70) }}
                        </p>
                    </div>
                    <a href="{{ route('recipe.show', $recipe->id) }}" class="btn btn-dark btn-sm w-100 py-2 fw-medium rounded-pill">
                        Lihat Detail Resep &rarr;
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    .transition-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.1) !important;
        transition: all 0.3s ease;
    }
</style>
@endsection
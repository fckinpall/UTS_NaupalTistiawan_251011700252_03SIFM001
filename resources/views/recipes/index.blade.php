@extends('layouts.app')

@section('content')
<div class="row mb-5">
    <div class="col-lg-8 mx-auto text-center py-4 px-3 rounded-4 bg-white shadow-sm border border-light">
        <span class="badge bg-warning bg-opacity-25 text-dark fw-bold px-3 py-2 rounded-pill mb-3">
            🍳 Katalog Resep Masakan
        </span>
        <h1 class="fw-bold display-6 text-dark mb-2">Daftar Resep Kuliner</h1>
        <p class="text-muted lead fs-6 mb-3">Cari dan temukan resep favorit Anda beserta estimasi biayanya.</p>
        
        <form action="{{ route('recipes.index') }}" method="GET" class="d-flex justify-content-center gap-2">
            <input type="text" name="search" class="form-control form-control-sm rounded-pill px-3 w-75" placeholder="Cari nama resep, kategori, atau bahan..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-dark btn-sm rounded-pill px-4">Cari</button>
            @if(request('search'))
                <a href="{{ route('recipes.index') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3">Reset</a>
            @endif
        </form>
    </div>
</div>

<div class="row g-4">
    @forelse($recipes as $recipe)
    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden transition-card" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
            <div class="position-relative overflow-hidden">
                <img src="{{ asset('assets/images/' . $recipe->image) }}" class="card-img-top" alt="{{ $recipe->name }}" style="height: 220px; object-fit: cover; transition: transform 0.5s ease;">
                <span class="position-absolute top-0 end-0 m-3 badge bg-dark bg-opacity-75 px-3 py-2 rounded-pill">
                    {{ $recipe->category }}
                </span>
            </div>
            
            <div class="card-body p-4 d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title fw-bold text-dark mb-1">{{ $recipe->name }}</h5>
                    <div class="text-success fw-bold fs-5 mb-2">
                        Rp {{ number_format($recipe->price, 0, ',', '.') }}
                    </div>
                    <p class="card-text text-muted small mb-3">
                        {{ Str::limit($recipe->description, 80) }}
                    </p>
                    <p class="card-text text-muted small mb-3">
                        <span class="d-inline-flex align-items-center gap-1 bg-light px-2 py-1 rounded">
                            ⏱️ Waktu: <strong class="text-dark">{{ $recipe->cook_time }}</strong>
                        </span>
                    </p>
                </div>
                
                <a href="{{ route('recipe.show', $recipe->id) }}" class="btn btn-dark btn-sm w-100 py-2 fw-medium rounded-pill shadow-sm">
                    Lihat Detail Resep &rarr;
                </a>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12 text-center py-5">
        <p class="text-muted fs-5">Pencarian untuk "{{ request('search') }}" tidak ditemukan.</p>
        <a href="{{ route('recipes.index') }}" class="btn btn-dark btn-sm rounded-pill px-4">Kembali ke Semua Resep</a>
    </div>
    @endforelse
</div>

<div class="d-flex justify-content-center mt-5">
    {{ $recipes->links() }}
</div>

<style>
    .transition-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.1) !important;
    }
    .transition-card:hover img {
        transform: scale(1.05);
    }
</style>
@endsection
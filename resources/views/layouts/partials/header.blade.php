<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background: linear-gradient(135deg, #212529 0%, #343a40 100%);">
    <div class="container py-2">
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ route('home') }}">
            <span class="p-2 bg-warning bg-opacity-25 rounded-circle text-warning fs-5">🍳</span>
            <span>Portal Resep Masakan</span>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-lg-center gap-2">
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded {{ request()->routeIs('home') ? 'active bg-white bg-opacity-10 text-white fw-medium' : 'text-white-50' }}" href="{{ route('home') }}">
                        Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded {{ request()->routeIs('recipes.*') ? 'active bg-white bg-opacity-10 text-white fw-medium' : 'text-white-50' }}" href="{{ route('recipes.index') }}">
                        Daftar Resep
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded {{ request()->routeIs('profile') ? 'active bg-white bg-opacity-10 text-white fw-medium' : 'text-white-50' }}" href="{{ route('profile') }}">
                        Tentang Portal
                    </a>
                </li>
                <li class="nav-item">
                    <div class="d-flex flex-column text-lg-end text-start px-2 py-1 border-start border-secondary text-light ms-lg-2">
                        <small class="text-white-50" style="font-size: 0.75rem;">Sistem Informasi S-1</small>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
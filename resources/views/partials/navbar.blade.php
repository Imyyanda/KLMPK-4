


<header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('https://sttcipasung.ac.id/wp-content/uploads/2023/07/STT-CIPASUNG-2-e1688823058980.png') }}" alt="Logo" style="width: 15rem;" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                         <a href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                        <a href="{{ route('profile') }}">Profil Kampus</a>
                        </li>
                        <li class="nav-item">
                        <a href="{{ route('program_studi') }}">Program Studi</a>
                        </li>
                        <li class="nav-item">
                        <a href="{{ route('fasilitas') }}">Fasilitas</a>
                        </li>
                        <li class="nav-item">
                        <a href="{{ route('ukm') }}">UKM</a>
                        </li>
                        <li class="nav-item">
                        <a href="{{ route('ppmb') }}">PPMB Online</a>
                        </li>
                        <li class="nav-item">
                        <a href="{{ route('beasiswa') }}">Beasiswa</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
</header>
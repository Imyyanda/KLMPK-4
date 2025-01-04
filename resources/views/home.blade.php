@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="welcome-section">
            <h2>Sekolah Tinggi Teknologi Cipasung</h2>
            <p>Tempat belajar dan berkembang yang mendukung inovasi dan kreativitas.</p>
        </div>

        <div class="cards">
            <div class="card">
                <img src="{{ Vite::asset('resources/img/hmif.png') }}" alt="Teknik Informatika">
                <h3>Informatika</h3>
                <p>Informatika adalah ilmu yang mempelajari tentang pengembangan dan penerapan teknologi informasi,
                    sistem komputer, dan perangkat lunak.</p>
            </div>
            <div class="card">
                <img src="{{ Vite::asset('resources/img/hmti.png') }}" alt="Teknik Industri">
                <h3>Teknik Industri</h3>
                <p>Teknik industri adalah bidang ilmu yang mempelajari bagaimana mengoptimalisasi kegiatan manusia,
                    seperti produksi, pengelolaan, dan ekonomi</p>
            </div>
        </div>
    </div>
@endsection


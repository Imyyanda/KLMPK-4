@extends('layouts.app')
<style>
/* Reset untuk menghilangkan margin dan padding default */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-dark;
}

/* Gaya untuk body */
body {
    font-family: Arial, sans-serif;
    background-color: #def0e8;
}


/* Navigation Bar */
nav {
    background-color: #34495e;
    overflow: hidden;
}

nav a {
    color: white;
    padding: 14px 20px;
    text-decoration: none;
    float: left;
    display: block;
}

nav a:hover {
    background-color: #2980b9;
}

/* Konten Utama */
.container {
    padding: 20px;
}

/* Bagian Selamat Datang */
.welcome-section {
    text-align: center;
    margin-top: 20px;
}

/* Gaya untuk cards (kartu) */
.cards {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-top: 20px;
}

.card {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 30%;
    margin-bottom: 20px;
    padding: 15px;
    text-align: center;
}

.card img {
    width: 100%;
    border-radius: 8px;
}

/* Footer */
footer {
    text-align: center;
    padding: 10px 0;
    background-color: #333;
    color: white;
}

footer a {
    color: white;
    text-decoration: none;
    margin: 0 10px;
}

footer a:hover {
    text-decoration: underline;
}

</style>
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


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Program Studi - Sekolah Tinggi Teknologi Cipasung</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #2ea042;
            color: white;
            padding: 20px 0;
            text-align: center;
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

        .container {
            width: 80%;
            margin: 0 auto;
        }

        h1 {
            color: #fff;
            text-align: center;
        }

        h2 {
            color: #2ea042;
            text-align: center;
        }

        .program-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
        }

        .program-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 48%;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .program-card h3 {
            color: #2ea042;
        }

        .program-card p {
            font-size: 16px;
            text-align: justify;
        }

        .program-card ul {
            list-style-type: none;
            padding: 0;
        }

        .program-card ul li {
            font-size: 14px;
            color: #555;
        }

        .program-card .duration,
        .program-card .facilities {
            margin-top: 10px;
        }

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
</head>

<body>

    <header>
        <h1>Program Studi di Sekolah Tinggi Teknologi Cipasung</h1>
        <p>Temukan Program Studi yang Sesuai dengan Minat dan Karier Anda</p>
    </header>
    <nav>
        <a href="index.html">Beranda</a>
        <a href="Profil.html">Profil Kampus</a>
        <a href="Program Studi.html">Program Studi</a>
        <a href="Fasilitas.html">Fasilitas</a>
        <a href="Ekstrakulikuler.html">UKM</a>
        <a href="PPMB Online.html">PPMB Online</a>
        <a href="Beasiswa.html">Beasiswa</a>
    </nav>
    <div class="container">
        <h2>Daftar Program Studi</h2>

        <div class="program-list">
            <!-- Program Studi 1 -->
            <div class="program-card">
                <h3>Informatika</h3>
                <p>
                    Program Studi Teknik Informatika mempersiapkan mahasiswa untuk menjadi ahli dalam bidang teknologi
                    informasi dan komputer.
                </p>
                <div class="duration">
                    <strong>Durasi Studi:</strong> 4 Tahun
                </div>
                <div class="facilities">
                    <strong>Fasilitas:</strong>
                    <ul>
                        <li>Laboratorium Komputer Modern</li>
                        <li>Wi-Fi Gratis di Kampus</li>

                    </ul>
                </div>
            </div>

            <!-- Program Studi 2 -->
            <div class="program-card">
                <h3>Teknik Industri</h3>
                <p>
                    Program Studi Industri menawarkan pembelajaran dalam bidang industri, serta pengelolaan industri
                    secara efektif dan efisien.
                </p>
                <div class="duration">
                    <strong>Durasi Studi:</strong> 4 Tahun
                </div>
                <div class="facilities">
                    <strong>Fasilitas:</strong>
                    <ul>
                        <li>Perpustakaan dengan Koleksi Bisnis Lengkap</li>
                        <li>Program Magang di Perusahaan Mitra</li>
                        <li>Wi-Fi Gratis di Kampus</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>Ikuti kami di:</p>
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
        <a href="#">Instagram</a>
        <div class="contact">
            <p>&copy; 2024 sttcipasung. Semua Hak Dilindungi.</p>
        </div>
    </footer>

</body>

</html>

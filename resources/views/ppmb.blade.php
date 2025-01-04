<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPMB Online - Sekolah Tinggi Teknologi Cipasung</title>
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

        .form-container {
            margin-top: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container input,
        .form-container select,
        .form-container button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
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

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Formulir Pendaftaran</h2>

        <div class="form-container">
            <form action="#" method="post">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" required>

                <label for="Alamat">Alamat</label>
                <input type="text" id="Alamat" name="Alamat" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="Asal">Asal Sekolah</label>
                <input type="Asal" id="Asal" name="Asal" required>

                <label for="Lulusan">Pilih Lulusan</label>
                <select id="Lulusan" name="Lulusan" required>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                </select>

                <label for="program">Pilih Program Studi</label>
                <select id="program" name="program" required>
                    <option value="ti"> Informatika</option>
                    <option value="manajemen">Teknik Industri</option>
                </select>

                <button type="submit" style="background-color: green; color: white;">Daftar Sekarang</button>
            </form>


        </div>
    </div>
@endsection



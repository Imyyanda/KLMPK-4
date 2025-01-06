<?php

$host = "localhost";
$dbname = "pmbb_db"; 
$user = "postgres";  
$password = "password"; 

// Membuat koneksi
$conn = pg_connect("host=$host dbname=$dbname user=$user password=$password");

// Cek koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . pg_last_error());
}

// Ambil data dari formulir
$nama = $_POST['name'];
$alamat = $_POST['Alamat'];
$email = $_POST['email'];
$asal_sekolah = $_POST['Asal'];
$lulusan = $_POST['Lulusan'];
$program_studi = $_POST['program'];

// Query untuk menyimpan data ke tabel pendaftaran
$query = "INSERT INTO pendaftaran (nama_lengkap, alamat, email, asal_sekolah, lulusan, program_studi) 
          VALUES ('$nama', '$alamat', '$email', '$asal_sekolah', '$lulusan', '$program_studi')";

// Eksekusi query
$result = pg_query($conn, $query);

// Cek keberhasilan
if ($result) {
    echo "<h3>Pendaftaran berhasil!</h3>";
    echo "<p>Terima kasih sudah mendaftar, $nama. Data Anda telah kami terima.</p>";
} else {
    echo "<h3>Terjadi kesalahan!</h3>";
    echo "<p>Data tidak dapat disimpan: " . pg_last_error() . "</p>";
}

// Tutup koneksi
pg_close($conn);
?>

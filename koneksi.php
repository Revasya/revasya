<?php
// Konfigurasi database
$host = "localhost"; // nama host
$username = "root"; // nama pengguna database
$password = ""; // kata sandi database
$database = "dbkontak"; // nama database
// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $database);
// Memeriksa koneksi
if (!$conn) {
die("Koneksi gagal: " . mysqli_connect_error());
}
//echo "Koneksi berhasil";
?>
<?php 
$host = "localhost";
$username = "root";
$pass = "sipa2402";
$dbname = "db_antrianrs";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "koneksi berhasil";
} catch (PDOException $e) {
    echo "Koneksi Gagal" . $e->getMessage();
}
?>
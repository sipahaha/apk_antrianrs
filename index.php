<?php
session_start(); 
include "lib/koneksi.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); 
    exit();
}


?>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
 
    <?php
        $page = isset($_GET['page'])?$_GET['page']:null;
        if(isset($page)) {
            if ($page=='tambah') {
                include "modul/tambah_antrian.php";
             }
             if ($page=='daftar') {
                include "modul/daftar_antrian.php";
             }
             if ($page=='hapus') {
                include "modul/hapus_antrian.php";
             } 
             if ($page=='ubah') {
                include "modul/ubah_status.php";
             }

            if ($page=='keluar') {
                include "modul/logout.php";
             }
        }else{
                include "modul/default.php";
            }
            
             ?>
</body>

</html>
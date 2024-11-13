<?php 
include '../lib/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $nama_pasien = $_POST['nama_pasien']; 
    $nomor_antrian = $_POST['nomor_antrian']; 
    $waktu_kedatangan = $_POST['waktu_kedatangan']; 

    $sql = "INSERT INTO tb_antrian (nama_pasien, nomor_antrian, waktu_kedatangan) VALUES (:nama_pasien, :nomor_antrian, :waktu_kedatangan)"; 
    $stmt = $conn->prepare($sql); 
    $stmt->bindParam(':nama_pasien', $nama_pasien); 
    $stmt->bindParam(':nomor_antrian', $nomor_antrian); 
    $stmt->bindParam(':waktu_kedatangan', $waktu_kedatangan);
    
    if ($stmt->execute()) { 
        echo "Data antrian berhasil ditambahkan!"; 
        header("Location: daftar_antrian.php");
        exit(); 
    } else { 
        echo "Error: Gagal menambahkan data."; 
    } 
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Antrian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }
        input[type="text"],
        input[type="number"],
        input[type="datetime-local"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Tambah Antrian</h2>
    <form method="POST" action="tambah_antrian.php">
        <label for="nama_pasien">Nama Pasien:</label>
        <input type="text" id="nama_pasien" name="nama_pasien" required>

        <label for="nomor_antrian">Nomor Antrian:</label>
        <input type="number" id="nomor_antrian" name="nomor_antrian" required>

        <label for="waktu_kedatangan">Waktu Kedatangan:</label>
        <input type="datetime-local" id="waktu_kedatangan" name="waktu_kedatangan" required>

        <input type="submit" value="Tambah Antrian">
    </form>
</div>

</body>
</html>
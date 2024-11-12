<?php 
include '../lib/koneksi.php'; 
 
// Menyiapkan query untuk mengambil data antrian 
$sql = "SELECT * FROM tb_antrian ORDER BY id DESC"; 
$stmt = $conn->prepare($sql); 
$stmt->execute(); // Eksekusi query 
 
// Menampilkan hasil query 
echo "<h2>Daftar Antrian Pasien</h2>"; 
echo "<table border='1'> 
        <tr> 
        <th>No</th> 
        <th>Nama Pasien</th> 
        <th>Nomor Antrian</th> 
        <th>Waktu Kedatangan</th> 
        <th>Status</th> 
        <th>Aksi</th> 
        </tr>"; 
 
// Ambil semua data hasil query 
$antrian = $stmt->fetchAll(PDO::FETCH_ASSOC); 
 
if (count($antrian) > 0) { 
    $no = 1; 
    foreach ($antrian as $row) { 
        echo "<tr> 
        <td>".$no."</td> 
        <td>".$row["nama_pasien"]."</td> 
        <td>".$row["nomor_antrian"]."</td> 
        <td>".$row["waktu_kedatangan"]."</td> 
        <td>".$row["status"]."</td> 
        <td><a href='ubah_status.php?id=".$row["id"]."'>Ubah 
Status</a> | <a 
href='hapus_antrian.php?id=".$row["id"]."'>Hapus</a></td> 
        </tr>"; 
        $no++; 
    } 
    echo "</table>"; 
} else { 
    echo "Tidak ada antrian."; 
} 
 
$conn = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Antrian Pasien</title>
    <style>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #5cb85c;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            color: #5cb85c;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .no-data {
            text-align: center;
            color: #777;
        }
    </style>
</head>
<body>
    
</body>
</html>
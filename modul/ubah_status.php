<?php 
include '../lib/koneksi.php'; 

if (isset($_GET['id'])) { 
    $id = $_GET['id']; 
    $sql = "UPDATE tb_antrian SET status = 'Selesai' WHERE id = :id"; 
    $stmt = $conn->prepare($sql); 
    $stmt->bindParam(':id', $id, PDO::PARAM_INT); 

    if ($stmt->execute()) { 
        header("Location: daftar_antrian.php");
        exit();
    } else { 
        echo "Error: " . $stmt->error;
    } 
} else {
    echo "ID tidak ditemukan.";
}

$conn = null; 
?>
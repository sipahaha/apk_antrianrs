<?php
include "../lib/koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_antrian WHERE id = :id";
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

?>
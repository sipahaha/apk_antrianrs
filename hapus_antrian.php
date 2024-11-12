<?php
    include "koneksi.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM tb_antrian WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();


        if (  $stmt->execute()) {
           echo "Data antrian Berhasil di Hapus";
           header("Location : daftar_antrian.php");
        }else{
            echo "Error:" . $conn->error;
        }
    }

?>
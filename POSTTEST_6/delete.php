<?php
    require "connect.php";

    $id = $_GET['id_mobil'];
    $get_img = mysqli_query($conn,"SELECT * FROM data_mobil WHERE id_mobil=$id");

    $img = mysqli_fetch_assoc($get_img);

    

    $result = mysqli_query($conn, "DELETE FROM data_mobil WHERE id_mobil=$id");
    
    unlink("mbl/".$img['gambar']);

    if ($result){
        echo "
        <script> 
            alert ('data berhasil dihapus');
            document.location.href = 'admin.php';
        </script>";
    } 
?>
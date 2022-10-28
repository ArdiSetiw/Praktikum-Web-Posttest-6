<?php 
    $server = 'localhost';
    $user = 'root' ;
    $password = '' ;
    $db_name = 'db_mobil';

    $conn = mysqli_connect($server, $user, $password, $db_name);

    if (!$conn) {
        die("Gagal Terhubung ke : " .mysqli_connect_error());
    }
 ?>
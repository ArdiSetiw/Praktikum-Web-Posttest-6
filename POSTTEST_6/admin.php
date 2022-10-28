<?php
    require "connect.php";
    
    $result = mysqli_query($conn,"SELECT * FROM data_mobil");

    $mobil = [];

    while($row = mysqli_fetch_assoc($result)){
        $mobil[] = $row;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        <?php include "style.css" ?>
    </style>
    <script>
        <?php include "javascript.js" ?>
    </script>
    <script src="JavaScript.js"></script>
    <title>Document</title>
</head>
<body id="bg_abt" >
    <!-- Navigasi Bar -->
    <header id="container">
        <div id="judul">
            <p>MOBIL AUTOMOTIVE</p>
            <span>Admin</span>
        </div>
        <div id="nav_bar">
            <nav class="navbar-custom">
                <ul>
                    <li><a href="admin.php" class="active-page">Home</a></li>
                    <li><input class="log" type="submit" value='Log-out' onclick="logout()"></li>
                    <li>
                        <div class="theme-switch-wrapper">                    
                            <label class="theme-switch" for="checkbox">
                              <input type="checkbox" id="checkbox" value="check" onclick="theme_ab()"/>                        
                              <div class="slider round"></div>                    
                            </label>                
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div id="read_sql">
        <br><br><h1>Daftar Mobil</h1>
        <table  width=60% align="center">
            <tr>
                <th height=50px>ID</th>
                <th>MEREK</th>
                <th>MODEL</th>
                <th>HARGA</th>
                <th>Gambar</th>
                <th>Tanggal Upload</th>
            </tr>
            <?php $i = 1; foreach($mobil as $mbl): ?>
            <tr>
                <td><?php echo $mbl['id_mobil']; ?></td>
                <td><?php echo $mbl['merek']; ?></td>
                <td><?php echo $mbl['model'];?></td>
                <td><?php echo $mbl['harga']; ?></td>
                <td><img width="100px" src="mbl/<?php echo $mbl['gambar']; ?>" alt=""></td>
                <td><?php echo $mbl['tanggal']; ?></td>
                <td align="center">
                    <a href="update.php?id_mobil=<?php echo $mbl['id_mobil'];?>"><i class="gg-pen"></i></a>
                </td>
                <td align="center">
                    <a href="delete.php?id_mobil=<?php echo $mbl['id_mobil'];?>"><i class="gg-trash"></i></a>
                </td>
            </tr>
            <?php $i++; endforeach; ?>
        </table><br>
        <a href="create.php"><button class="custom-btn btn-1">Add Car</button></a>
    </div>

</body>
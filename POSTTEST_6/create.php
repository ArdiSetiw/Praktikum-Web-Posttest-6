

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
                    <li><a href="admin.php">Home</a></li>
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

    <div class="awwa">
        <form action="" method="POST" enctype="multipart/form-data">
            <section class="cf">
            <table id="tab_add">
                <tr class="awu">
                    <th style="font-size: 30px;">Add Car</th>
                </tr>   
                <tr>
                    <td class='form_input'>Merek</td>
                </tr>
                <tr>
                    <td align=center>
                        <input class ='add' type="text" name="merek" placeholder="Merek Mobil" autocomplete="off" required>
                    </td>
                </tr>
                <tr>
                    <td class='form_input'>Model</td>
                </tr>
                <tr>
                    <td align=center>
                        <input class ='add' type="text" name="model" placeholder="Model Mobil" autocomplete="off" required>
                    </td>
                </tr>
                <tr>
                    <td class='form_input'>Harga</td>
                </tr>
                    <td align=center>
                        <input class ='add' type="number" name="harga" placeholder="Harga Mobil" autocomplete="off" required>
                    </td>
                <tr>
                    <td class='form_input'>Gambar Mobil</td>
                </tr>
                    <td align=center>
                        <input type="file" accept="image/*" name="img" required>
                    </td>
                <tr>
                    <td align=center><input type='submit' name='add' value='Add' id="feed-container" ></td>
                </tr>
            </table>
            </section>
        </form>
    </div>
    
</body>

<?php
    require "connect.php";

    if (isset($_POST['add'])){
        $merek = $_POST['merek'];
        $model = $_POST['model'];
        $harga = $_POST['harga'];
        $date = date("Y/m/d");

        $image = $_FILES['img']['name'];
        $temp = $_FILES['img']['tmp_name'];
        $folder = "mbl/".$image;

        if(move_uploaded_file($temp, 'mbl/'.$image)){
            $sql = "INSERT INTO data_mobil VALUES ('','$merek','$model','$harga','$image','$date')";

            $result = mysqli_query($conn, $sql);

            if ($result){
                echo "
                <script> 
                    alert ('Succes to Add Car');
                    document.location.href = 'admin.php';
                </script>";
            } else {
                echo "
                <script> 
                    alert ('Failed to Add Car');
                    document.location.href = 'create.php';
                </script>";
            }


            }
    }
?>
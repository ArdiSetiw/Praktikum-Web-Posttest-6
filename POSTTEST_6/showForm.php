<?php
    $nama = isset($_GET['nama']) ? $_GET['nama'] : '';
    $umur = isset($_GET['umur']) ? $_GET['umur'] : '';
    $rate = isset($_GET['rate']) ? $_GET['rate'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <script src="JavaScript.js"></script>
    <style>
        <?php include "style.css" ?>
    </style>
    <script>
        <?php include "javascript.js" ?>
    </script>
    <title>Document</title>
</head>
<body>

    <!-- Navigasi Bar -->
    <div id="home" style="display:flex; flex-direction:column;">

        <header id="container">
            <div onmouseover="judul_over()" onmouseout="judul_out()" id="judul">
                <p>MOBIL AUTOMOTIVE</p>
            </div>
            <div id="nav_bar">
                <nav class="navbar-custom">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Me</a></li>
                        <li>
                            <div class="theme-switch-wrapper">                    
                                <label class="theme-switch" for="checkbox">
                                  <input type="checkbox" id="checkbox" value="check" onclick="theme()"/>                        
                                  <div class="slider round"></div>                    
                                </label>                
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

    <table  width="80%" style="margin:auto;">
        <tr>
            <td colspan=4 align=center id="feed_tab">Feedback</td>
        </tr>
        <tr id="td_feed">
            <td align=center>NO</td>
            <td align=center>NAME</td>
            <td align=center>AGE</td>
            <td align=center>RATE</td>
        </tr>
        <tr id="td_feed">
            <td align=center>1.</td>
            <td align=center><?php echo $nama?></td>
            <td align=center><?php echo $umur ?></td>
            <td align=center><?php echo $rate ?></td>
        </tr>
    </table>
</body>
</html>
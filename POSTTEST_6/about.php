<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="JavaScript.js"></script>
    <title>Document</title>
</head>
<body id="bg_abt" >
    
    <!-- Navigasi Bar -->
    <header id="container">
        <div id="judul">
            <p>MOBIL AUTOMOTIVE</p>
        </div>
        <div id="nav_bar">
            <nav class="navbar-custom">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php" class="active-page">About Me</a></li>
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

    <!-- Biodata -->
    <div style="margin-right: 10%; margin-left: 10%; ">
        <table width="100%"  id="tab">
            <tr>
                <td colspan="3" height="220px" align="center" id="bg_profile"><img src="image/anime.jpg" alt="profile pic" width="200" height="200" id="profile"></td>
            </tr>
            <tr >
                <td height="65px" align="center" width="49%">Nama</td>
                <td align="center">:</td>
                <td align="center">Ardi Setyiawan</td>
            </tr>
            <tr>
                <td height="65px" align="center">NIM</td>
                <td align="center">:</td>
                <td align="center">2109106035</td>
            </tr>
            <tr>
                <td height="65px" align="center">Praktikum</td>
                <td align="center">:</td>
                <td align="center">Pemograman Web</td>
            </tr>
            <tr>
                <td height="65px" align="center">Kelas</td>
                <td align="center">:</td>
                <td align="center">A2 2021</td>
            </tr>
            <tr>
                <td height="65px" align="center" style="padding-bottom: 15px;">Kontak</td>
                <td align="center">:</td>
                <td align="center"><i class="fa fa-instagram" onclick="pop()"></i></td>
            </tr>
        </div>

    </table>

    <footer id="foot">
        Copyright &copy; 2022
        Designed by Ardi Setyiawan
    </footer>
</body>
</html>
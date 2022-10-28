<?php
    error_reporting(E_ERROR);

    session_start();

    require'connect.php';

    if(isset($_POST['loginbutton'])){
        $username = $_POST['uname'];

        $result = mysqli_query($conn,"SELECT * FROM akun WHERE username='$username' ");
        
        $data = mysqli_fetch_assoc($result);

        $psw = $data['password'];

        if($_POST['password'] == $psw){
            header("Location: admin.php");
        }else{
            echo "<script>
                alert('Wrong Username or Password!');
            </script>";
        }
    }



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
    <div id="home">

        <header id="container">
            <div onmouseover="judul_over()" onmouseout="judul_out()" id="judul">
                <p>MOBIL AUTOMOTIVE</p>
            </div>
            <div id="nav_bar">
                <nav class="navbar-custom">
                    <ul>
                        <li><a href="index.php" class="active-page">Home</a></li>
                        <li><a href="about.php">About Me</a></li>
                        <li><input class="log" type="submit" value='Login' onclick="loginpop()"></li>
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

        <!-- Home Page -->
        <section class="home" id="background">
            <div>
                <p onmouseover="welc_over()" onmouseout="welc_out()" id="welcome">WELCOME TO<br>MOBIL AUTOMOTIVE</p>
                <div id="desc"><p>Offering you some of the best cars in the world</p></div>
                <div id="moreDesc" align="center">
                    <p><b>A Car For All Budgets<br>Cars! Trucks! SUVs!<br>Any Car That You Want We Might Sell It</b></p>
                </div>
    
                <div align="center"><p id="show">Show More</p></div>

                <div class="search-box">
                    <div class="search">
                        <a href="list.php" class="list">See Our List of Cars</a>
                    </div>
                </div>
            </div> 
            <div id="pop_login" style="display: none;">
                <div id="login_form" class="login_form">
                    <div class="box">
                        <div class="form">
                            <form action="" method="post">
                                <table id="tab_log">
                                    <tr>
                                        <th >Login Admin</th>
                                        <td onclick="close_log()" class='close'>x</td>
                                    </tr>
                                    
                                    <tr>
                                        <td colpan=2><label for="uname"><b>Username</b></label></td>
                                    </tr>
                                    <tr>
                                        <td colspan=2><input type="text" placeholder="Enter Username" name="uname" required></td>
                                    </tr>
                                    <tr>
                                        <td colspan=2><label for="psw"><b>Password</b></label></td>
                                    </tr>    
                                    <tr>
                                        <td colspan=2><input type="password" placeholder="Enter Password" name="password" required></td>
                                    </tr>
                                    <tr align=center>
                                        <td colspan=2><input type="submit" name="loginbutton" value="Login" id="loginbutton"></td>
                                    </tr>    
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pop_feed" style="display: none;">
            <div class="awwa">
                <form action="showForm.php" method="GET" >
                    <section class="cf">
                    <table id="tab_feed">
                        <tr class="awu">
                            <th>Give Us Your Feedback</th>
                            <th class="close" onclick="close_feed()">x</th>
                        </tr>   
                        <tr>
                            <td class='form_input'>Name</td>
                        </tr>
                        <tr>
                            <td align=center>
                                
                                <input class ='input' type="text" name="nama" placeholder="Name" autocomplete="off" require>
                            </td>
                        </tr>
                        <tr>
                            <td class='form_input'>Age</td>
                        </tr>
                        <tr>
                            <td align=center>
                                <input class ='input' type="number" name="umur" placeholder="Age" autocomplete="off" require>
                            </td>
                        </tr>
                        <tr>
                            <td class='form_input'>Your Experience of Our Website</td>
                        </tr>
                        <tr>
                            <td id='rate' class="wrapper form_input" >
                                <input type='radio' name="rate" value="Not Satisfied">
                                <label for="Not Satisfied">Not Satisfied</label> <br>
                                <input type='radio' name="rate" value="Satisfied">
                                <label for="Satisfied">Satisfied</label> <br>
                                <input type='radio' name="rate" value="Very Satisfied">
                                <label for="Very Satisfied">Very Satisfied</label>
                            </td>
                        </tr>
                        <tr>
                            <td align=center><input type='submit' name='submitForm' value='Send Feedback' id="feed-container" ></td>
                        </tr>
                    </table>
                    </section>
                </form>
            </div>
</div>

            <button id="popup" class="feedback-button" onclick="feedback()">Feedback</button>
            <!-- <a href='showForm.php'>Tes</a> -->
            
        </section>
        
    </div>


    <footer id="foot">
        Copyright &copy; 2022
        Designed by Ardi Setyiawan
    </footer>
    <script src="JavaScript.js"></script>
</body>
</html>
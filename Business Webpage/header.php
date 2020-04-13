<?php
  session_start();
 ?>
<html>
<head>
<link rel="stylesheet"  type="text/css" href="style.css">
<title>NEW BUSINESS IDEA</title>
</head>




    <header>

        <nav>
          <a href="#">
            <img src="img/photo.png" alt="logo">
          </a>
          <ul>
            <li> <a href="index.php">Home</a> </li>
            <li> <a href="profile.php">My Profile</a> </li>
            <li> <a href="#">NEW</a> </li>
            <li> <a href="#">Clothes/Accessories</a> </li>
            <li> <a href="#">Homegoods/Decor</a> </li>

            <?php
            if (isset($_SESSION['userUid'])) {
              echo '<form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
              </form>';
            }
            else {
              echo '<form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/Email">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="login-submit">Login</button>
              </form>';
            }

             ?>
             <li><a href="signup.php">Signup</a></li>
          </ul>





        </nav>

    </header>


</body>

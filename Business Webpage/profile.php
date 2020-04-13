<?php
  include('header.php');
  require "includes/dbh.inc.php";
  error_reporting (E_ALL ^ E_NOTICE);
  $email = $_SESSION['userUid'];
  $result = mysqli_query($conn,"SELECT first, last, college, city, st, grade FROM users WHERE uidUsers='$email';");
  $fetch = mysqli_fetch_array($result);
  //print_r($fetch);
  $firstName = $fetch['first'];
  $lastName = $fetch['last'];
  $college = $fetch['college'];
  $city = $fetch['city'];
  $state = $fetch['st'];
  $grade = $fetch['grade'];
 ?>
 <h1 class='wrapper'>
    <title>Profile Page</title>
    <?php
     if (isset($_SESSION['userUid'])) {
       echo '<p>My Profile</p>';
       echo "<form class='wrapper' action='upload.php' method='post' enctype='multipart/form-data'>
         <input type='file' name='file'>
         <button type='submit' name='submit'>UPLOAD</button>

       </form>";
     }

     else {
       echo '<p>Please Login above or Create an Account for FREE!</p>';
     }
    ?>
    <h3 align='center'>Welcome, <?php echo $firstName." " . $lastName."!"; ?></h3>



</h1>
  </body>

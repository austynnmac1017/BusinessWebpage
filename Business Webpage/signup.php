<?php
  require "header.php";
   error_reporting (E_ALL ^ E_NOTICE);
?>

   <main>
     <h2 class="wrapper">Signup</h2>
     <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
          echo '<p>Fill in all fields!</p>';
        }
        elseif ($_GET['error'] == "invaliduidmail") {
          echo '<p>Invalid username and e-mail!</p>';
        }
        elseif ($_GET['error'] == "invaliduidm") {
          echo '<p>Invalid username!</p>';
        }
        elseif ($_GET['error'] == "invalidmail") {
          echo '<p>Invalid e-mail!</p>';
        }
        elseif ($_GET['error'] == "passwordcheck") {
          echo '<p>Your passwords do not match!</p>';
        }
        elseif ($_GET['error'] == "usertaken") {
          echo '<p>Username is already taken!</p>';
        }
      }
      elseif ($_GET["signup"] == "success") {
        echo '<p>Signup Successful!</p>';
      }
      ?>
    <h2 class="wrapper">
     <form action="includes/signup.inc.php" method="post">
       <input type="text" name="first" placeholder="First Name">
       <input type="text" name="last" placeholder="Last Name">
       <input type="text" name="college" placeholder="Name of College/University">
       <input type="text" name="city" placeholder="City">
       <input type="text" name="st" placeholder="State">
       <input type="text" name="grade" placeholder="Grade">
       <input type="text" name="uid" placeholder="Username">
       <input type="text" name="mail" placeholder="E-mail">
       <input type="password" name="pwd" placeholder="Password">
       <input type="password" name="pwd_repeat" placeholder="Retype Password">
       
       <button type="submit" name="signup-submit">Signup</button>
     </form>
   </h2>

     <?php
      if (isset($_GET["newpwd"])) {
        if ($_GET["newpwd"] == "passwordupdated") {
          echo '<p>Your password has been reset!</p>';
        }
      }
      ?>
      <h2 class="wrapper">
     <a href="reset-password.php">Forgot your password?</a>
   </h2>



   </main>

<?php
   require "footer.php";
?>

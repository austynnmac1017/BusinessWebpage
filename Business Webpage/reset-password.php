<?php
  require "header.php";
?>



   <main>
     <h2 class="wrapper">Reset your password
     <p>An e-mail will be sent to you with instructions on how to reset your password.</p>
     <form  action="includes/reset-request.inc.php" method="post">
       <input type="text" name="email" placeholder="Enter your e-mail address">
       <button type="submit" name="reset-request-submit">Receive new password by e-mail</button>
     </form>

     <?php
        if (isset($_GET["reset"])) {
          if ($_GET["reset"] == "success") {
            echo '<p>Check your e-mail!</p>';
          }
        }
      ?>
   </main>
</h2>
<?php
   require "footer.php";
?>

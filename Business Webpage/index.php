<?php
  require "header.php";
?>

   <main>
     <div class="wrapper">
       <h1>
         <form action="search.php" method="post">
           <input type="text" name="search" placeholder="Search">
           <button type="submit" name="submit-search">Search</button>
         </form>
         
     <?php
      if (isset($_SESSION['userUid'])) {
        echo '<p>You are logged in!</p>';
      }
      else {
        echo '<p>You are logged out!</p>';
      }
     ?>
   </h1>
     </div>
   </main>

<?php
   require "footer.php";
?>

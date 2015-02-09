<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<html>
   <head>
  	<meta charset="utf-8" />
  	<title>Log In</title>
  </head>
  <body>
    <?php
     if($_SESSION['name'])
     {
       $_SESSION['visit2']++;
       echo "Hello " . $_SESSION['name'] . " you have visited this page " . $_SESSION['visit2'] . " times before. Click <a href = 'login.php'>here</a> to logout.<br /> ";
       echo "<a href = 'content1.php'>Content1</a> <br />";
     }else
     {
       echo "Click <a href = 'login.php'>here</a> to login <br />";
     }
      
    ?>	
  </body>
</html>
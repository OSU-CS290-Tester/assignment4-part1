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
     session_unset();
     session_destroy();
     echo "<form action='content1.php' method='post'>";
     echo "<p>User Name: <input type='text' name='username'><br /></p>";
     echo "<p><input type='submit' value='Login'></p>";
     echo "</form>";
    ?>	
  </body>
</html>
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
     
     if($_SERVER['REQUEST_METHOD'] == 'POST')
     {
        if(!empty($_POST['username']))
        {
          $_SESSION['name'] = $_POST['username'];
          $_SESSION['visit1'] = 0;
          $_SESSION['visit2'] = -1;
          echo "Hello " . $_SESSION['name'] . " you have visited this page " . $_SESSION['visit1'] . " times before. Click <a href = 'login.php'>here</a> to logout.<br /> ";
          echo "<a href = 'content2.php'>Content2</a> <br />";
        }else
        {
          echo "A username must be entered. Click <a href = 'login.php'>here</a> to return to the login screen";
        }
        
     }elseif($_SESSION['name'])
     {
       $_SESSION['visit1']++;
       echo "Hello " . $_SESSION['name'] . " you have visited this page " . $_SESSION['visit1'] . " times before. Click <a href = 'login.php'>here</a> to logout.<br /> ";
       echo "<a href = 'content2.php'>Content2</a> <br />";
     }else
     {
       echo "Click <a href = 'login.php'>here</a> to login <br />";
     }
     
    ?>	
  </body>
</html>
<!DOCTYPE html>
<html>
   <head>
  	<meta charset="utf-8" />
  	<title>Loopback</title>
  </head>
  <body>
    <?php
     if($_SERVER['REQUEST_METHOD'] == 'GET')
     {
     	if($_GET == null)
     	{
     		$result = array("Type" => 'GET', "parameters" => "null");
     	}else
     	{
     		$result = array("Type" => 'GET', "parameters" => $_GET);
     	}  	
     	echo json_encode($result);
     }elseif($_SERVER['REQUEST_METHOD'] == 'POST')
     {
     	if($_POST == null)
     	{
     		$result = array("Type" => 'POST', "parameters" => "null");
     	}else
     	{
     		$result = array("Type" => 'POST', "parameters" => $_POST);
     	}  	
     	echo json_encode($result);
       }
    ?>	
  </body>
</html>
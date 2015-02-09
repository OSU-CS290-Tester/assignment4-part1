<!DOCTYPE html>
<html>
   <head>
  	<meta charset="utf-8" />
  	<title>multtable</title>
  </head>
  <body>
    <?php
      $test = true;
      if (!$_GET["min-multiplier"])
      {
      	echo "Missing parameter min-multiplier";
      	$test = false;
      }else
      {
      	$minCol = $_GET["min-multiplier"];
      	if (!filter_var($minCol, FILTER_VALIDATE_INT))
      	{
      		echo "min-multiplier must be an integer";
      		$test = false;
      	}
      }
      if (!$_GET["max-multiplier"])
      {
      	echo "Missing parameter max-multiplier";
      	$test = false;
      }else
      {
      	$maxCol= $_GET["max-multiplier"];
      	if (!filter_var($maxCol, FILTER_VALIDATE_INT))
      	{
      		echo "max-multiplier must be an integer";
      		$test = false;
      	}
      }
      if (!$_GET["min-multiplicand"])
      {
      	echo "Missing parameter min-multiplicand";
      	$test = false;
      }else
      {
      	$minRow = $_GET["min-multiplicand"];
      	if (!filter_var($minRow, FILTER_VALIDATE_INT))
      	{
      		echo "min-multiplicand must be an integer";
      		$test = false;
      	}
      }
      if (!$_GET["max-multiplicand"])
      {
      	echo "Missing parameter max-multiplicand";
      	$test = false;
      }else
      {
      	$maxRow = $_GET["max-multiplicand"];
      	if (!filter_var($maxRow, FILTER_VALIDATE_INT))
      	{
      		echo "max-multiplicand must be an integer";
      		$test = false;
      	}
      }
      
      if($test)
      {
      	if($_GET["max-multiplier"] < $_GET["min-multiplier"])
        {
      	  echo "Minimum multiplier is larger than maximum";
      	  $test = false;
        }
        if($_GET["max-multiplicand"] < $_GET["min-multiplicand"])
        {
      	  echo "Minimum multiplicand is larger than maximum";
      	  $test = false;
        }

      }
      
      if($test)
      {
        echo "<table border='1'>"; 
 
		    for($tr=$minRow - 1; $tr <= $maxRow; $tr++)
		    { 
      
   	 		   echo "<tr>"; 
        	 for($td=$minCol - 1;$td<=$maxCol;$td++)
        	 { 
               
               	if($tr == $minRow - 1)
               	{
               		if($td == $minCol - 1)
               			$result = " ";
               		else
               		 	$result = $td;
               	}else
               		if($td == $minCol -1)
               			$result = $tr;
               		else
               			$result = $tr * $td;
                  	
               echo "<td> $result </td>"; 
        	 } 
    		echo "</tr>"; 
		  } 
 
		    echo "</table>"; 
      }  
    ?>	
  </body>
</html>
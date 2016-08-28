<html>
 <head>
  <title>Enviroment Variables PHP</title>
 </head>
 <body>
	
	<?php

    	print"<table border=0>";
    	foreach ($_SERVER as $key=>$val )
       	{
         	echo "<tr><td>".$key."</td><td>" .$val."</tr>";
        }
    	print"</table>";
	?>

 </body>
</html>
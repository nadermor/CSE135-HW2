<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>

	<?php

		$num = dechex(rand(1,3));
		#random color function				
		function bgcolor($num){
	
			if($num == 1){
				return dechex('16777215') ;
			}
			elseif ($num == 2) {
				return dechex('16711680');
			}
			elseif ($num == 3){
				return dechex('511') ;
			}
		}
		echo '<p> Hello Web World from Language PHP on </p>';
		print date("m/d/y G.i:s<br>", time());
 	?> 
 	<html>
 		<head>
 		<head>
 			<body style="background:#<?php echo bgcolor($num); ?>">    
 </body>
</html>
<html>
	<head>
  		<title>Collection PHP</title>
 	</head>
 		<body>

			<?php

				echo 'Hello '.$_GET["firstname"].' '.$_GET["lastname"] ;
				echo '</p> from a Web app written in PHP!!!</p>';
				echo '</p>The current time and date is:</p>';
				print date("m/d/y G.i:s<br>", time());

				$background = $_GET["Color"];  // Storing Selected Value In Variable

				function bgcolor($background){
					if(strcmp($background ,"White") == '0'){
						return dechex('16777215') ;
					}
					elseif (strcmp($background, "Red") == '0') {
						return dechex('16711680');
					}
					elseif (strcmp($background, "Blue") == '0'){
						return dechex('511') ;
					}
				}

				$color = bgcolor($background);	
		?> 
 <html>
 	<head>
 	<head>
 			<body style="background:#<?php echo $color; ?>">    
 	</body>
</html>
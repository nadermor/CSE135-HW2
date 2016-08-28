<html>
 <head>
  <title>Session PHP 2</title>
 </head>
 <body>

	<?php
		session_start();
		
		$user = $_POST["user"];
		
		if(!isset($user) || trim($user) == '')
		{
   			echo "Howdy stranger...tell me your name on page1!!!";

   			$_SESSION['user'] = $_POST["user"];

    		echo "<input type='submit' name='logout' method='logout' value='Clear Session'>";
    	
    		if(isset($_POST['logout']) && ($_POST['logout'] == "Log out")) { 
        		unset($_SESSION['user']); 
    		}
    	}
		else{
			echo "Hi $user, nice to meet you!";
		}

 	?> 
 </body>
</html>
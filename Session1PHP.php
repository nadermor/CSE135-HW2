
<!DOCTYPE html>
	<html>
		<body>
			<form action="Session2PHP.php" method="POST">  
     
    			 User Name: <input type = "text" name = "user" size=30><br>
 
 				<input type="submit" name="Submit" value="Submit!" />
    			<a href="Session2PHP.php">Click here</a>
   
			</form>


			<?php
				session_start();
				$cookie_name = "username";
				$value = $_POST['user'];
				setcookie($cookie_name, $value, time()+60 );

				if(isset($_POST['submit'])) { 
 					$_SESSION['user'] = $_POST['user'];
 				} 
			?>

		</body>
	</html>
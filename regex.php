<?php 

		
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$firstName = $_POST['firstname'];
			$lastName = $_POST['lastname'];
			
			 $re = '/\b[0-9A-Fa-f]+\b/m';



// Print the entire match result

	if (preg_match($re, $firstName, $matches, PREG_OFFSET_CAPTURE, 0) ) {
		if (preg_match($re, $lastName, $matches, PREG_OFFSET_CAPTURE, 0) )
        {
            echo '<p>Successful</p>';
        }
		else
        {
            echo '<p>LastName must be hexadecimal</p>';
        }

	} else {
        
        if (preg_match($re, $lastName, $matches, PREG_OFFSET_CAPTURE, 0) )
        {
            echo '<p>FirstName must be hexadecimal</p>';
        }
		else
        {
            echo '<p>LastName must be hexadecimal</p>';
            echo '<p>FirstName must be hexadecimal</p>';
        }
    
        

		
	}
	
				
			


			
		}

?>
<html>
<head><title>Mandeep Kaur Saini (8621039)</title></head>
<body>
<form action="regex.php" method="POST">

	<input type="text" name="firstname">Enter your First Name
	<input type="text" name="lastname">Enter your Last Name
	<input type="submit">Login

</form>
</body>
</html>
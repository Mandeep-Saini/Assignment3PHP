<?php 
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$pattern = $_POST['pattern'];
			 $re = '/([\w](\-)?[\w]?+\.)+[a-zA-Z]{3,4}$/';
	if (preg_match($re, $pattern, $matches, PREG_OFFSET_CAPTURE, 0) ) {
        echo 'Successfully Matched';
	}
       else {
        echo 'Not Matched';
		}
        }
?>
<html>
<head><title>Mandeep Kaur Saini (8621039)</title></head>
<body>
<form action="regex2.php" method="POST">

	<input type="text" name="pattern">Enter your pattern
	<input type="submit">Check

</form>
</body>
</html>
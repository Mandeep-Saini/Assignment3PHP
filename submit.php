<html>
<head><Title>Mandeep Kaur Saini (8621039)</title></head>
<body>
<form action="submit.php" method="POST">

Enter your Name <input type="text" name="name" value="<?php if (isset($name)) echo $name; ?>"><br>
Enter your Age<input type="text" name="age" value = "<?php if (isset($age)) echo $age; ?>"><br>
Enter your City	<input type="text" name="city" value="<?php if (isset($city)) echo $city; ?>"><br>
Enter your Country<input type="text" name="country" value="<?php if (isset($country)) echo $country; ?>"><br>
Enter your Password<input type="text" name="password" value="<?php if (isset($password)) echo $password; ?>"><br>
	
	<input type="submit">

</form>
</body>
</html>


<?php
// $name= mysqli_real_escape_string($dbc, $_POST['name']);
// $age= mysqli_real_escape_string($dbc, $_POST['age']);
// $city= mysqli_real_escape_string($dbc, $_POST['city']);
// $country= mysqli_real_escape_string($dbc, $_POST['country']);
// $password= mysqli_real_escape_string($dbc, $_POST['password']);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$names=($_POST['name']);
$ages= ($_POST['age']);
$citys= ($_POST['city']);
$countrys=($_POST['country']);
$passwords= ($_POST['password']);
$error=array();


if(empty($_POST['name'])||empty($_POST['age'])||empty($_POST['city'])||empty($_POST['country'])||empty($_POST['password']))
{
	array_push($error, "Enter the empty Fields");
	

}
else{
	
$min=18;
$max=120;

$newname= filter_var($names, FILTER_SANITIZE_STRING);
$newage= filter_var($ages, FILTER_SANITIZE_STRING);
$newcity= filter_var($citys, FILTER_SANITIZE_STRING);
$newcountry= filter_var($countrys, FILTER_SANITIZE_STRING);


if(!(filter_var($newage, FILTER_VALIDATE_INT, array("min_range"=>$min, "max_range"=>$max))))
{
	array_push($error, "Age must between 18 and 120");
}
$re = '/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z*@$]{6,}$/';

	if (!(preg_match($re, $passwords, $matches, PREG_OFFSET_CAPTURE, 0))) 
	{
		array_push($error,'Password must be minimum 6 in length');
	} 
	

if(count($error) > 0){
    foreach($error as $e){
        echo $e . "<br />";
    }
}
}
}
?>
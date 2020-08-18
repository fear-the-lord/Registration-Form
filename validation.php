<?php 

SESSION_START(); 
header('location: login.php');

$con = mysqli_connect('localhost', 'root');

if($con) {
	echo "Connection Established";
}
else {
	echo "Not Connected";
}

mysqli_select_db($con, 'usersignup');

$name = $_POST['user'];
$password = $_POST['password'];

$q = "select * from signin where name = '$name' && password = '$password'";
$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1) {
	$_SESSION['username'] = $name;
	header('location:home.php');
}
else {
	echo "User Not Found";
	header('location:login.php');
}

?>
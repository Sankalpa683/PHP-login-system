<?php 
session_start();
$conn = mysqli_connect("localhost","root","","login");

if (isset($_POST['login'])) {
	$name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['username']));
	$pwd = mysqli_real_escape_string($conn, htmlspecialchars($_POST['password']));

	$select = "SELECT * FROM `users` WHERE name='$name' AND password='$pwd';";
	$query = mysqli_query($conn, $select);
	if ($query) {
		$_SESSION['username'] = $name;
		header("location: home.php");
	}
	else{
		echo "Nope";
	}
}

?>
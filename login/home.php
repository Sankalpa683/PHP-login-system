<?php 
session_start();
$conn = mysqli_connect("localhost","root","","login");
$users = $_SESSION['username'];
if ($users) {
	
}
else{
	header("location:index.php");
}
echo "Welcome " . $users;

$select = "SELECT * FROM `users` WHERE name='$users'";
$q = mysqli_query($conn, $select);
while ($row = mysqli_fetch_assoc($q)) {
	$username = $row['name'];
	$password = $row['password'];
}

?>



<?php 
	include 'config.php';
	session_start();
		    $query = mysqli_query($connection,"UPDATE users SET `username` = $_POST['username'] , `phone` = $_POST['phone'] WHERE `username` = $_SESSION['username']);
?>
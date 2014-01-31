<?php
	include_once "db.php";
	$email = $_POST['email'];
	$q = mysql_fetch_array(mysql_query("SELECT email FROM users WHERE email = '$email' LIMIT 1"));
	if($q[0] == $email) {
		session_start();
		$_SESSION['email'] = $q[0];
		header("Location: fstep.php");
	}
	else {
		header("Location: $_SERVER[HTTP_REFERER]?error=1");
	}
?>
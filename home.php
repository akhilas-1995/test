<?php
session_start();
include_once 'class.php';
$user = new User();
$uid = $_SESSION['uid'];
if (!$user->get_session()) {
	header("location:login.php");
}

if (isset($_GET['q'])) {
	$user->user_logout();
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<style>
		body {
			background-color: #7f8c8d;
		}

		#header {
			font-family: 'Georgia', Times New Roman, Times, serif;
		}
	</style>
</head>

<body>

	<div id="header"><a href="home.php?q=logout">LOGOUT</a></div>
	<h1>Hello <?php $user->get_fullname($uid); ?></h1>

	<div id="footer"></div>

</body>

</html>
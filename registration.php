<?php
include_once 'class.php';
$user = new User();
if (isset($_REQUEST['submit'])) {

	extract($_REQUEST);

	$register = $user->reg_user($fullname, $uname, $upass, $uemail);

	if ($register) {

		echo 'Registration successful <a href="login.php">Click here</a> to login';
	} else {
		echo 'Registration failed. Email or Username already exits please try again';
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Register</title>
	<style>
		body {
			background-color: #7f8c8d;
		}

		#main {
			width: 500px;
			margin: 0 auto;
			background: white;
			padding: 5px;
			border-radius: 10px;
			border: 2px solid black;
		}

		.icon {
			width: 150px;
			border-radius: 50%;
		}

		.myform {
			width: 450px;
			margin: 0 auto;
		}

		.inputvalue {
			width: 430px;
			margin: 0 auto;
			padding: 5px;
		}

		#signupbtn {
			background-color: #3498db;
			padding: 5px;
			margin-top: 10px;
			color: white;
			width: 99%;
			font-size: 18px;
			font-weight: bold;
			text-align: center;
		}
	</style>
</head>

<body>
	<script type="text/javascript" language="javascript">
		function submitreg() {

			var form = document.reg;

			if (form.name.value == "") {

				alert("Enter name.");

				return false;

			} else if (form.uname.value == "") {

				alert("Enter username.");

				return false;

			} else if (form.upass.value == "") {

				alert("Enter password.");

				return false;

			} else if (form.uemail.value == "") {

				alert("Enter email.");

				return false;

			}

		}
	</script>


	<div id="main">
		<center>
			<h1>Registration Form</h1>
		</center>
		<form action="" method="post" name="reg" class="myform">

			<label><b>Fullname</b></label><br>
			<input type="text" name="fullname" required="" class="inputvalue" /><br>
			<label><b>Username</b></label><br>

			<input type="text" name="uname" required="" class="inputvalue" /><br>
			<label><b>Email</b></label><br>
			<input type="email" name="uemail" required="" class="inputvalue" /><br>

			<label><b>Password</b></label>

			<input type="password" name="upass" required="" / class="inputvalue"><br>

			<input onclick="return(submitreg());" type="submit" name="submit" value="Register" id="signupbtn" />
			<a href="login.php">Already registered! Click Here!</a>
		</form>
	</div>
</body>

</html>
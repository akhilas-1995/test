<?php
session_start();

include_once 'class.php';

$user = new User();

if (isset($_REQUEST['submit'])) {

    extract($_REQUEST);

    $login = $user->check_login($emailusername, $password);

    if ($login) {

        header("location:home.php");
    } else {

        echo 'Wrong username or password';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
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

        #loginbtn {
            background-color: #27ae60;
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
    <script type="text/javascript">
        function submitlogin() {

            var form = document.login;

            if (form.emailusername.value == "") {

                alert("Enter email or username.");

                return false;

            } else if (form.password.value == "") {

                alert("Enter password.");

                return false;

            }

        }
    </script>

    <div id="main">
        <center>
            <h1>Login Here</h1>
        </center>
        <form class="myform" action="" method="post" name="login">
            <label><b>UserName or Email:</b></label>

            <input type="text" name="emailusername" class="inputvalue" required="" /><br>

            <label><b>Password:</b></label>

            <input type="password" name="password" class="inputvalue" required="" /><br>
            <input onclick="return(submitlogin());" type="submit" name="submit" value="Login" id="loginbtn" />



            <a href="registration.php">Register new user</a>


        </form>
    </div>
</body>

</html>
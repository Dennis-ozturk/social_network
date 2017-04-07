<?php
//connect
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("socialwebb") or die(mysql_error());
session_start();


//login script
	if(isset($_POST['username'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$md5pass = md5($password);

		$query = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$md5pass'");
		$get = mysql_fetch_assoc($query);

		if($get == "") {
			echo "<div class='error'>Wrong password Or Username</div>";
		} else {
			$_SESSION['username'] = $username;
            echo "Logged in!";
            echo ' <script> window.location.replace("http://localhost/socialnetwork3/home.php"); </script>';
		}

	}
?>

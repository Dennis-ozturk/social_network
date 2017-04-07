<?php include "templates/nav.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>findFriends</title>
	<link rel="stylesheet" type="text/css" href="css/nf/main.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="middle3">
		<h1>My notifications</h1>
		<hr />
		<?php
			$query = "SELECT * FROM follow_notifications WHERE user_to=$user";
			$sql = mysql_query($query);
			if ($sql) {
				while ($fetch = mysql_fetch_assoc($sql)) {
					$id = $fetch['id'];
					$follower = $fetch['follower'];

					$get_user = "SELECT * FROM users WHERE username=$follower";
					$get_user1 = mysql_query($get_user);
					if ($get_user1) {
						$fetch_user = mysql_fetch_assoc($get_use1);
						$profile_picture = $fetch_user['profile_picture'];
					}
		?>
		<div class="note">
			<?php echo $follower; ?> Has followed you
		</div>

	</div>
</body>
</html>
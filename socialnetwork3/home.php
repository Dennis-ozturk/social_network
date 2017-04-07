<?php include 'templates/nav.php'; ?>
<html>
<head>
<link rel='stylesheet' type='text/css' href='css/main.css' />
</head>
<body>
<div class='middle'>
<div id='post'>
<form action='' method='post'>
<textarea id='post-body' name='post-body'>Post something</textarea>
<input type='submit' name='submitp' id='submitp' value='Post' />
</form>
</div>
<div id='newsfeed'>
    
</div>
<div class='sidepanel'>
<img src='profile picture' height='250' width='200' />
<br />
<?php
 //get user info
$user = $_SESSION['username'];
$get_user = mysql_query("SELECT * FROM users WHERE username ='$user'");
$get = mysql_fetch_assoc($get_user);
    $firstname = $get['firstname'];
    $lastname = $get['lastname'];
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $_SESSION['username']; ?> - <?php echo $firstname; ?>&nbsp;<?php echo $lastname; ?></b>
<hr />

<div class='activity'>
 <h2>Activity</h2>   
</div>
</div>
</div>
</body>
</html>
<?php include "../includes/config.php"; ?>
<?php
if(isset($_POST['username'])) {
 $username =$_POST['username'];
 $follower = $_POST['follower'];
 $user = $_SESSION['username'];
    
if($username == $user) {
 echo "You cant follow your self";   
} else {
    
 mysql_query("INSERT INTO follows VALUES('','$username','$follower')");
    echo "Unfollow";
}
}
?>
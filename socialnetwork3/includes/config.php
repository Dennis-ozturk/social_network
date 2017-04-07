  <?php

//connect to database
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("socialwebb") or die(mysql_error());
session_start();
?>

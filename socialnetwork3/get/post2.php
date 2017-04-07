    <?php
        include '../includes/config.php';
        $username = $_GET['user'];
        $query = "SELECT * FROM posts WHERE username='$username' ORDER BY id DESC";
        $sql = mysql_query($query);
        if ($sql) {
        while($row = mysql_fetch_assoc($sql)) {
            $id = $row['id'];
            $username = $row['username'];
            $body = $row['body'];
            $date_added = $row['date_added'];
            $hashtags = $row['hashtags'];
            
            $get_post_user = mysql_query("SELECT * FROM users WHERE username='$username'");
            $get_post_user2 = mysql_fetch_assoc($get_post_user);
                $fname = $get_post_user2['firstname'];
                $lname = $get_post_user2['lastname'];
    ?>
    
    <div class='post'>
        <div class='post_wrap'>
        <img src='w' height='105px' width='85px' />
        <div class='author'>
        <?php echo $username; ?> <font color='#EEE'><?php echo $fname;?> <?php echo $lname; ?></font>
        </div><hr />
        </div>
        <p>
        <?php echo $body; ?>
        </p>
    </div>
    
    <?php
      }      
    }
    ?>
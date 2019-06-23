<?php
   include('db.inc.php');
   include "session.php";
   $ses_sql = mysqli_query($db,"select * from users where email = '$user_check' ");

?>

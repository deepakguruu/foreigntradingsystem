<?php
   include('db.inc.php');
session_start();

   $user_check = $_SESSION['uid'];

   $ses_sql = mysqli_query($conn,"SELECT * FROM users WHERE uid= '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['name'];

   if(!isset($_SESSION['uid'])){
     echo "nein";
   }
?>

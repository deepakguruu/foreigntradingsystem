<?php
   unset($_SESSION['uid']); session_destroy();
   echo "<script>window.location.assign('index.html')</script>";

?>

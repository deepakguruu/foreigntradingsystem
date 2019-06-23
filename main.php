<?php
   include('session.php');
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Foreign Trading System</title>

    <link rel="stylesheet" href="style.css">
  </head>
  <body background="queen.jpg">
    <center><h1 class="inp">Foreign Trading System</h1>
      <h1 class="inp" >Welcome <?php echo $login_session   ?></h1>
    <table style="border-spacing:1em ">
    <tr>
    <td>
    <a class="button"href="transaction.html">New Transaction</a></td>
    <td>
    <a class="button"href="bank.php">Bank account details</a></td>
    <td>
    <a class="button"href="transhist.php">Transaction History</a></td>
    <td>
    <a class="button"href="logout.php">Logout</a></td>
  </tr>
  </center>
  </body>
</html>

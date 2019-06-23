<?php
include "bank_check.php";
 ?>
<html>
<head>
    <title>Bank Account Details</title>
    <link rel="stylesheet" href="style.css">

</head>
<body background="queen.jpg">
  <h1 class="inp" style="text-align: center">Bank Details</h1>

      <form method="post" action="signup_add.php">
    <center>
    <table class="inp" style="width: 400px;">
        <tr>
            <td style="width: 35%;">

     Account Number:
            </td>
            <td style="width: 65%;">
                <input id="accno" type="text" name="accno" maxlength="52" />

            </td>
        </tr>
        <tr>
            <td style="width: 35%;">
        Bank Name:
            </td>
            <td style="width: 65%;">
                <input id="bank_name" type="text" name="bank_name" maxlength="2048" />
            </td>
        </tr>
        <tr>
            <td style="width: 35%;">
        Available Balance:
            </td>
            <td style="width: 65%;">
                <input id="abal" type="text" name="abal" maxlength="16" />
            </td>
        </tr>
        <tr>
            <td colspan="2" style="width: 100%;">
              <button type="submit"  name="submit">Submit</button>
            </td>
        </tr>
    </table>
    </center>
    </form>
</body>
</html>

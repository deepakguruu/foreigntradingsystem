<?php
session_start();
    include "db.inc.php";
if (isset($_POST['submit'])){
    $email = $_POST['uname'];
    $pass = $_POST['upass'];
    if (empty($email)||empty($pass)){
        $empty = "";
        if(empty($pass)){
            $empty .= " Password";
        }
        if(empty($email)){
            $empty .= " Email";
        }
        mysqli_close($conn);
          echo' <script> alert("Fill out all the fields".$empty);</script>' ;
    }
    else{
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                mysqli_close($conn);
                    echo' <script> alert("Invalid Email");window.location.assign("login.html") ;</script>';
            }
            else{

                    $sql = "SELECT * FROM fts.users WHERE email = \"$email\" AND password = \"$pass\"";
                    $result = mysqli_query($conn,$sql);
                    $resultCheck = mysqli_num_rows($result);
                    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    if ($resultCheck == 1){
       $_SESSION['uid'] = $row['uid'];
       header("location: main.php");
    }else {
       $error = "Your Login Name or Password is invalid";
       echo "<script>alert('$error');window.location.assign('login.html');</script>";
    }
                }

        }
      }

else{
    mysqli_close($conn);
    echo' <script> alert("Please enter values in the fields");window.location.assign("login.html");</script>' ;

}
?>

<?php
    include "db.inc.php";
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $phone_no=$_POST['phone_no'];
    $gender = $_POST['gender'];
    $currency = $_POST['group3'];
    if (empty($name)||empty($email)||empty($pass)||empty($phone_no)||empty($gender)||empty($currency)){
        $empty = "";
        if(empty($name)){
            $empty .= " Name";
        }
        if(empty($phone_no)){
            $empty .= " Contact Number";
        }
        if(empty($pass)){
            $empty .= " Password";
        }
        if(empty($currency)){
            $empty .= " Currency";
        }
        if(empty($gender)){
            $empty .= " Gender";
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
                    echo' <script> alert("Invalid Email") ;</script>';
                      header("Location: index.php?invalid+email");
            }
            else{
                if (!preg_match('/^[0-9]*$/',$phone_no) || strlen($phone_no) != 10){
                    mysqli_close($conn);
                      echo' <script> alert("Invalid+Number");</script>' ;
                }
                else{
                    $sql = "SELECT * FROM fts.users WHERE email = \"$email\"";
                    $result = mysqli_query($conn,$sql);
                    $resultCheck = mysqli_num_rows($result);
                    if ($resultCheck > 0){
                        mysqli_close($conn);
                        echo' <script> alert("Already registered");window.location.assign("index.html");</script>' ;
                      }
                    else{
                        $sql = "INSERT INTO fts.users (name, email, password, phone_no, gender ,currency) VALUES('$name','$email','$pass','$phone_no','$gender','$currency')";
                        if(mysqli_query($conn,$sql))
                        {
                            mysqli_close($conn);
                            echo' <script> alert("Registration successful");window.location.assign("index.html");</script>' ;

                        }
                        else{
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    }
                }
            }
        }
    }
else{
    mysqli_close($conn);
    echo' <script> alert("Please enter values in the fields");window.location.assign("signup.html");</script>' ;

}
?>

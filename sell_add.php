<?php
    include "db.inc.php";
    include "session.php";

    $uid=$_SESSION['uid'];
if (isset($_POST['submit'])){
    $iname = $_POST['iname'];
    $quant = $_POST['quant'];
    $price = $_POST['price'];
    $ses_sql = mysqli_query($conn,"SELECT * FROM users WHERE uid= '$uid' ");
    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $currency = $row['currency'];
    if (empty($iname)||empty($quant)||empty($price)){
        $empty = "";
        if(empty($iname)){
            $empty .= " iname";
        }
        if(empty($price)){
            $empty .= " Price";
        }
        if(empty($quant)){
            $empty .= " quant";
        }
        mysqli_close($conn);
          echo' <script> alert("Fill out all the fields".$empty);</script>' ;
    }
    else{


                        $sql = "INSERT INTO fts.sell_table (iname, quant, price,uid,currency) VALUES('$iname','$quant','$price','$uid','$currency')";
                        if(mysqli_query($conn,$sql))
                        {
                            mysqli_close($conn);
                            echo' <script> alert("Product added succefully");window.location.assign("main.php");</script>' ;

                        }
                        else{
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    }
                }



else{
    mysqli_close($conn);
    echo' <script> alert("Please enter values in the fields");window.location.assign("sell.php");</script>' ;

}
?>

<?php

function getrealipaddres()
{

    //whether ip is from share internet
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from remote address
    else {
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }
}

function cart()
{
    if (isset($_GET['add_cart'])) {
        // add_cart --->add to cart index.php when someone click add to cart--->$_COOKIE
        //href='index.php?add_cart=$prod_id'
        // with product id 
        global $db;

        $p_id = $_GET['add_cart'];
        // $p_qty = $_

        $ip_add = getrealipaddres();

        // ip address function declare with variables

        $check_pro = "SELECT * FROM cart WHERE p_id = '$p_id' AND ip_add = '$ip_add'";

        $run_check = mysqli_query($db, $check_pro);

        if (mysqli_num_rows($run_check) > 0) {
            // The mysqli_num_rows() function is an inbuilt function in PHP which is used to return the number of rows present in the result set. 
            // It is generally used to check if data is present in the database or not.
            //  To use this function, it is mandatory to first set up the connection with the MySQL database.
            echo "";
        } else {
            // $q = "INSERT INTO cart(p_id,ip_add) values ('$p_id','$ip_add')";
            $q = "INSERT INTO cart(p_id,ip_add) values ('$p_id','$ip_add',)";

            echo "$q";
            // inserting cart by query
            $run_q = mysqli_query($db, $q);



            echo "<script>alert('inserted');</script>";

            // echo "<script>window.open('index.php','_self')</script>";
            // Replace the current window with a new window:
            // The open() method opens a new browser window, or a new tab, depending on your browser settings and the parameter values.

        }
    }
}

?>

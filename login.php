<?php include "header.php";


include "db.php";

include "functions.php";

@session_start();

?>

<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All departments</span>
                    </div>
                    <ul>
                        <?php

                        $get_cat = "SELECT * FROM categories";
                        $query = mysqli_query($db, $get_cat);
                        while ($ar = mysqli_fetch_array($query)) {
                            $cat_id = $ar['cat_id'];
                            $cat_title = $ar['cat_title'];
                            echo "<li><a href='products.php?cat=$cat_id'>$cat_title</a></li>";
                        };


                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<div class="container">

    <div class="maindiv">
        <div class="form-group lg-form">

            <form action="checkout.php" method="POST">

                <label for="email">Email </label>
                <input type="text" class='form-control' name='c_email'>
                <br />
                <label for="email">Password </label>
                <input type="password" class='form-control' name='pass'>
                <br />
                <button name='c_login' type='submit' class="btn btn-default sub-btn">Submit</button>
            </form>
        </div>

        <?php

        // if (isset($_POST['c_login'])) {
        if (isset($_POST['c_login'])) {

            
            $customer_email = $_POST['c_email'];
            $customer_pass = $_POST['pass'];

            // query tht match wiht inserted data in customer
            $sel_customer = "SELECT * FROM customer where 
            customer_email='$customer_email' AND customer_password='$customer_pass'";

            
            $run_customer = mysqli_query($db, $sel_customer);

            $check_customer = mysqli_num_rows($run_customer);

            $get_ip = getrealipaddres();

            $sel_cart = "SELECT * FROM cart where ip_add = '$get_ip'";

            $run_cart = mysqli_query($db, $sel_cart);

            $check_cart = mysqli_num_rows($run_cart);

            
            if ($check_customer) {
                $_SESSION['customer_email'] = $customer_email;
                // $_SESSION['customer_fullname'] = $customer_fullname;
                echo "<script>alert('You Successfully logged in!')</script>";
                echo "<script>window.open('index.php','_self')</script>";
                // echo "<script>window.open('payment_option.php','_self')</script>";
            } else {
                echo "<script>alert('email or password is wrong, try again!')</script>";
                    // exit();
            }
        }

        ?>

    </div>
</div>
</br></br>
<!-- Login Form -->

<!-- Login form end -->
<!-- Footer Section Begin -->
<?php include "footer.php" ?>
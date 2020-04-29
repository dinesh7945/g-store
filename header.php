<!DOCTYPE html>
<html>

<head>
    <title>Grocery Store </title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <style>
        .logo_products {
            background: cadetblue;
            padding: 0 !important;
            width: 100%;
        }

        .w3ls_logo_products_left {
            margin-top: 10px;
            margin-right: 0 !important;
            width: 20%;
            margin-left: 16px !important;
        }



        .w3l_search {
            margin-top: 20px;
            width: 40%;
            margin: 2em 0 0 0 !important;
        }

        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .search {
            display: inline-block;
            width: 100%;
        }

        .list {
            display: inline-block;
            color: whitesmoke;
            margin: 2em 0px 0 40px !important;
        }

        .a-list {
            padding: 10px;
            color: whitesmoke;

        }

        .a-list:hover {
            border: 1px solid whitesmoke;
            color: whitesmoke;
        }

        a {
            color: whitesmoke;
            padding-left: 2px;
        }

        a:hover {
            color: whitesmoke;
        }

        .w3ls_logo_products_left:hover {
            border: 1px solid whitesmoke;

        }

        .products-breadcrumb {
            background: #79c3c5 !important;
        }
    </style>
</head>

<body>
    <!-- header -->
    <!-- <div class="agileits_header">
		<div class="w3l_offers">
			<a href="products.html">Today's special Offers !</a>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="product_list_header">  
			<form action="#" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="View your cart" class="button" />
                </fieldset>
            </form>
		</div>
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="login.html">Login</a></li> 
								<li><a href="login.html">Sign Up</a></li>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="mail.html">Contact Us</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div> -->
    <!-- script-for sticky-nav -->
    <!-- <script>
        $(document).ready(function() {
            var navoffeset = $(".agileits_header").offset().top;
            $(window).scroll(function() {
                var scrollpos = $(window).scrollTop();
                if (scrollpos >= navoffeset) {
                    $(".agileits_header").addClass("fixed");
                } else {
                    $(".agileits_header").removeClass("fixed");
                }
            });

        });
    </script> -->
    <!-- //script-for sticky-nav -->
    <div class="logo_products">

        <div class="w3ls_logo_products_left">
            <h1><a href="index.php"><span>Grocery</span> Store</a></h1>
        </div>
        <div class="w3l_search">
            <form class='search' action="#" method="post">
                <input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
                <input type="submit" value=" ">

            </form>
        </div>
        <div class="list">
            <i class="fa fa-map-marker a-list" style='color:whitesmoke;' aria-hidden="true"> <a href="events.html">Select City</a></i>


            <i class="fa fa-user-circle a-list" style="color:whitesmoke" aria-hidden="true"><a href="login.php">My Account</a></i>

            <i class="fa fa-shopping-cart a-list" style="color: whitesmoke;"><a href="events.html">My Cart</a></i>

            <!-- <a class='a-list' href="events.html">Cart</a> -->
        </div>

        <div class="clearfix">
        </div>

    </div>
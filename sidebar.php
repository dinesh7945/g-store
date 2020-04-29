<?php
include "db.php";

?>
<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
    <ul class="nav navbar-nav nav_1">
        <?php

        $get_cat = "SELECT * FROM categories";

        $query = mysqli_query($db, $get_cat);

        

        while ($ar = mysqli_fetch_array($query)) {
            $cat_id = $ar['cat_id'];
            $cat_title = $ar['cat_title'];
            
             echo "<li><a href='products.php?cat=$cat_id'>$cat_title</a></li>";

        };



        ?>
        <!-- <li><a href="products.php">Branded Foods</a></li>
        <li><a href="household.html">Households</a></li>
        <li class="dropdown mega-dropdown active">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>
            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                <div class="w3ls_vegetables">
                    <ul>
                        <li><a href="vegetables.html">Vegetables</a></li>
                        <li><a href="vegetables.html">Fruits</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li><a href="kitchen.html">Kitchen</a></li>
        <li><a href="short-codes.html">Short Codes</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>
            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                <div class="w3ls_vegetables">
                    <ul>
                        <li><a href="drinks.html">Soft Drinks</a></li>
                        <li><a href="drinks.html">Juices</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li><a href="pet.html">Pet Food</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Frozen Foods<span class="caret"></span></a>
            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                <div class="w3ls_vegetables">
                    <ul>
                        <li><a href="frozen.html">Frozen Snacks</a></li>
                        <li><a href="frozen.html">Frozen Nonveg</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li><a href="bread.html">Bread & Bakery</a></li> -->
    </ul>
</div><!-- /.navbar-collapse -->
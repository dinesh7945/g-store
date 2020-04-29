<?php 
 include "db.php";


 function catprd(){

    global $db;
    $cat_id = $_GET['cat'];

    $get_cat_prd = "SELECT * FROM product where cat_id = '$cat_id'";

    $run_cat = mysqli_query($db,$get_cat_prd);

    while($row = mysqli_fetch_array($run_cat)){
        
        $prd_id = $row['prd_id'];
        $ct_id = $row['cat_id'];
        $brnd_id = $row['brand_id'];
        $prd_title = $row['prd_title'];
        $prd_img1 = $row['prd_img1'];
        $prd_img2 = $row['prd_img2'];
        $prd_img3 = $row['prd_img3'];
        $prd_price = $row['prd_price'];
        $prd_desc = $row['prd_desc'];
        $prd_qty = $row['prd_qty'];

    }


 }

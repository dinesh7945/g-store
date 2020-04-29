<?php

$db = mysqli_connect("localhost", "root", "", "g-store");

if ($db) {
    // echo "connected";
} else {
    echo "not connected";
}

<?php

include 'index.php';


    $username = $_POST['name'];
    $search = "SELECT * FROM users(user_name) where user_name like ('$username')";
    $s = mysqli_query($result, $search);
    print_r($s);





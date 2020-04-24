<?php

include 'db.php';
include 'delete.php';
//$allowed_users=array('tom','alex');
//
//
//if (isset($_POST['submit'])) {
//
//    $username = $_POST['name'];
//    $lastname = $_POST['surname'];
//
//    echo $username . '<br/>';
//    echo $lastname . '<br/>';
//    if (strlen($username) > 5) {
//
//    }
//
//
//    if(!in_array($username,$allowed_users)){
//
//        echo "sorry yo have no access";
//    }
//
//    else{
//        echo "welcome".$username.'<br/>you are log in';
//    }
//}
//


//
//print_r($_POST['name']);
//print_r($_POST['surname']);


/**
 *
 * check if user has submitted and send to db the user & pass
 *
 */

if (isset($_POST['submit'])) {


    if (empty($_POST['name']) || empty($_POST['password'])) {

        $delete = "DELETE FROM users WHERE user_name='hello'";
        while ($row = mysqli_query($connection, $delete)) {

            if (is_null($row)) {
                echo "yes is null";
            }
        }

    } else {

        $username = $_POST['name'];
        $password = $_POST['password'];
        $query = "INSERT INTO users(user_name,user_password)"; //NOT THESE BECAUSE IS A COLUMNS
        $query .= "VALUES ('$username','$password')";

        $result = mysqli_query($connection, $query);

    }
}


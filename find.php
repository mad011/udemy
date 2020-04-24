<?php
include 'db.php';

$result = mysqli_query($connection,"SELECT * FROM users");

while($row = mysqli_fetch_row($result) ){


    echo "<pre>";
    print_r($row);
    echo "<pre>";

}
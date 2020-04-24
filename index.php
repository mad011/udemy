<?php
//include 'form.php';
include 'db.php';
//include 'form.php';
//

/***
 *
 * useful session
 *
 */
//session_start();
//
//if( isset( $_SESSION['counter'] ) ) {
//    $_SESSION['counter'] += 1;
//}else {
//    $_SESSION['counter'] = 1;
//}
//
//$msg = "You have visited this page ".  $_SESSION['counter'];
//$msg .= "in this session.";

/**end session **/

//
//ob_start();
//$output = "<div class='name'>this is a div you need</div>";
//$output .= ob_get_clean();
//print_r($output);


/**
 *
 * remote client ip
 *
 */


//    $ip = '0.0.0.0';
//    $ip = $_SERVER['REMOTE_ADDR'];
//
//    echo "You're logged in from: <b>".$ip;
//


//$values =array('post_id'=>1,'content'=>'hello');
//$row = 0;
//while($row < $values){
//
//    echo "<pre>";
//    print_r( $values);
//    echo "</pre>";
//    $row++;
//}

//
//function Fetch()
//{
//
//    global $connection;
//    $getallelements = "SELECT * from posts";
//    $getallelements = mysqli_query($connection,$getallelements);
//    while($info = mysqli_fetch_assoc($getallelements)){
//
//        echo "<pre>";
//        $value = $info['post_content'];
//        var_dump($value);
//        echo "</pre>";
//    }
//
//}


/**
 *
 * select from db via username && password
 *
 *
 */

//function validate()
//{
////    session_start();
//    global $connection;
//
//    if (isset($_POST['submit'])) {
//        if (empty($_POST['name']) || empty($_POST['password'])) {
//            echo "<div class='alert'>you make fill the fiels</div>";
//        } else {
//
//            $username = $_POST['name'];
//            $password = $_POST['password'];
//            echo $query = "SELECT * FROM users WHERE user_name='$username' and user_password ='$password'";
//            $search = mysqli_query($connection, $query);
//
//            while ($info = mysqli_fetch_assoc($search)) {
//
//                echo "<pre>";
//                print_r($info);
////                header('location:welcome.php');
//                echo "</pre>";
//            }
//
//
//        }
//
////end else
//
//    }
//
//}

/**************end of query********/


//
//
//session_start();
//$current_session_id = session_id();
//if (isset($_POST['submit'])) {
//
//
//    $result = mysqli_connect('localhost', 'root', '', 'test');
//    if (!$result) {
//        die('could not established' . mysqli_error());
//    } else {
//        $username = $_POST['name'];
//        $password = $_POST['password'];
//        $query = "INSERT INTO users (user_name,user_password,session) VALUES ('$username','$password','$current_session_id') ";
//
//        $insert = mysqli_query($result, $query);
//
//    }
//
//}
//


//        header("location:login.php");
//        $usb_inv = mysqli_num_rows($insert);
//        print_r($usb_inv);
//        while ($row = mysqli_fetch_assoc($insert)){
//            echo "<pre>";
//
//            echo "<pre>";
//        }
//
//    }
//
//
//}

//
//if(isset($_POST['submit'])){
//
//    $_SESSION['username'] = $_POST['name'];
//
//    if(isset($_SESSION['username']) == isset($_POST['name'])) {
//
//        echo "login";
//    }
//    else{
//
//
//    }
//
//
//}
//if(isset($_POST['log_out'])){
//    echo "you are log_out";
//
//        session_destroy();
////    unset($_SESSION['username']);
//
//}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!------bootstrap js--------->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <title>Document</title>
</head>


<header id="main">

    <div class="container-fluid p-0">
        <div class="row">

            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                        </ul>

                    </div>
                </nav>


            </div>

        </div>
    </div>

</header>
<!-------end of menu are------->


<?php function update($id)
{
    ob_start();
    global $id;
    global $connection;

    if(isset($_POST['submit-area'])) {
        $upd_value = $_POST['name'];
        $query_insert = "UPDATE posts SET post_content = ('$upd_value') WHERE posts. post_id = ('$id')";
        $select_all = mysqli_query($connection, $query_insert);
    }
    ?>
    <form action="" method="post">
        <input type="text" name="name"><br>

        <input type="submit" name ="submit-area" placeholder="update">
    </form>
    <?php
    $content = ob_flush();
    return $content;
}

/**
 * insert
 *
 */
function insert()
{
global $connection;
ob_start();
    if(isset($_POST['submit-area'])) {
        $upd_value = $_POST['name'];
        $query_insert = "Insert into posts(post_trash) values ('$upd_value')";
        mysqli_multi_query($connection, $query_insert);
    }


?>
    <form action="" method="post">
        <input type="text" name="name"><br>

        <input type="submit" name ="submit-area" placeholder="update">
    </form>

<?php

    $output = ob_flush();
    return $output;
}


echo insert();
?>


<section class="main-page">
    <div class="container">

        <div class="row">


            <div class="col-md-9">


<!--                --><?php
//
//
//                $query = "SELECT * FROM posts";
//                $select_all = mysqli_query($connection, $query);
//                while ($row = mysqli_fetch_assoc($select_all)):
//
//                    $id = $row['post_id'];
//                    $content = $row['post_content'];
//                    if ($content == NULL) {
//                        $message_terminnated = 'finish him';
//                        echo 'break code=>' . $message_terminnated;
//                        echo update($id);
//
//                    }
//
//
//                    print_r($id);
//
//
//                    ?>


                    <div class="content">

                        <div class="entry-title">

<!--                            <h1>--><?php //echo $row['post_content']; ?><!--</h1>-->
                            <h2>secondary text</h2>
                        </div>
                        <div class="title">
                            <h3> Blog by post title</h3>
                        </div>
                        <div class="quote">

                            <p>post by author</p>
                        </div>
                        <div class="content-post">
                            <a class="btn btn-primary" data-toggle="collapse" href="<?php echo $row['post_title']; ?>"
                               role="button"
                               aria-expanded="false" aria-controls="collapseExample">
                                Link with href
                            </a>
                            <!--                            <p></p>-->
                        </div>


                        <div class="wrapper-image">

                            <img src="https://via.placeholder.com/450">

                        </div>


                    </div>

<!--                --><?php //endwhile; ?>
            </div>


            <div class="col-md-3 mt-4">

                <div class="wrapper">
                    <div class="sidebar-right">

                        <h6>Blog search</h6>
                        <form class="form-search">
                            <input class="form-search" type="search" placeholder="Search"
                                   aria-label="Search">
                            <button class="btn btn-outline-success " type="submit">Search</button>
                        </form>


                    </div>


                    <div class="cat_box">
                        <div class="categories">
                            <h6>Blog Categories</h6>
                            <ul>
                                <li><a href="#">category name</a></li>
                                <li><a href="#">category name</a></li>
                                <li><a href="#">category name</a></li>
                                <li><a href="#">category name</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
</body>
</html>
<?php //session_destroy();?>

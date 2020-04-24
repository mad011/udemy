<?php
//ob_start();  // turns on output buffering
//$foo->bar();  // all output goes only to buffer
//ob_end_clean();  // clears buffer and closes buffering
//
//
//ob_start();  // turns on output buffering
//$foo->render();  // output goes only to buffer
//$output = ob_get_contents();  // stores buffer contents to the variable
//ob_end_clean();  // clears buffer and closes buffering
//
//
//$output = ob_get_clean();  // stores buffer content into variable and turns off buffering
//
//ob_start();  // turns on output buffering
//$foo->bar();  // all output goes only to buffer
//ob_clean();  // delete the contents of the buffer, but remains buffering active
//$foo->render(); // output goes to buffer
//ob_flush(); // send buffer output
//$none = ob_get_contents();  // buffer content is now an empty string
//ob_end_clean();  // turn off output buffering



ob_start();




?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
asdasdsd
</body>
</html>
<?php $output= ob_get_clean();?>
<?php print_r($output);?>

<?php



/***
 *
 * this function just print the name
 */

function Say_Name()
{

    return 'this is my name';
}

/**
 * below execute the function have just created
 */

//echo Say_Name();

/**
 *
 * this function make an associative array
 *
 */


function Check_type($value)
{

    if (is_array($value)) {
        echo "<pre>";

        foreach ($value as $key => $type) {


            $extra_arr[$type] = $key; //store the key value 0,1,2 to extra_arr[$type]
            $new_type = $type;

            $extra_arr[$type] = $new_type;
            unset($type);
            if($extra_arr[$new_type] == 'name') {
                $extra_arr[$new_type] = 'alexis';
                echo Check_string($extra_arr[$new_type]);
                echo "<br/>";
            }
            if($extra_arr[$new_type] == 'surname') {
                $extra_arr[$new_type] = 'iosifidis';
                echo Check_string($extra_arr[$new_type]);
                echo "<br/>";
            }
            if($extra_arr[$new_type] == 'age') {
                $extra_arr[$new_type] = '37';
                echo Check_string($extra_arr[$new_type]);
                echo "<br/>";
            }

        }



        print_r($extra_arr);
    }

    echo "</pre>";

}

Check_type(array('name','surname','age'));


/***
 *
 * check with this function the length of string
 *
 *
 */

function Check_string($new_type)
{

    $calc = strlen($new_type);
    return 'this is a string '.$calc;

}








/**
 *
 * check arrays;
 *
 *
 */

//$name = array('name','iws','age');
//
//$name[0] = $name[0];
//unset($name[0]);
//$name[0] = 'alexis';
//
//echo "<pre>";
//print_r($name);
//echo "</pre>";
<?php
/**
 * Created by PhpStorm.
 * User: son
 * Date: 26.01.18
 * Time: 23:27
 */

$arr = array(1,4,8,1,4,10,5,6,2,4,6);

function list_num_over_par_from_array($check_value, $array){
    foreach ($array as $value){
        if($value > $check_value) echo $value.",";
    }


}

function count_num_over_par_from_array($check_value, $array){
    $count = 0;
    foreach ($array as $value){
        if($value > $check_value) $count++;
    }
    echo $count;
}

count_num_over_par_from_array(6,$arr);
echo "\n";
list_num_over_par_from_array(6,$arr);

?>
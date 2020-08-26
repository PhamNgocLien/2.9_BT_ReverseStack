<?php
function reverse($arr){
    $stack = array();
    for ($i=count($arr)-1; $i >= 0; $i--){
        array_push($stack,$arr[$i]);
        array_pop($arr);
    }
    for ($i = 0; $i < count($stack); $i++){
        array_push($arr,$stack[$i]);
    }
    return $arr;
}

$array = [1,2,3,4,5,6];
echo '<pre>';
print_r(reverse($array));
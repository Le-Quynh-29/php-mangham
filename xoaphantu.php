<?php
$arr = array(1,2,45,3,56);
array_splice($arr,2,1);
//array_pop($arr);
foreach ($arr as $key => $value){
    echo $value."<br>";
}

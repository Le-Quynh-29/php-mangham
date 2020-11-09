<?php
$arr = array(array(1,2,35,6),array(4,6,7,8),array(9,7,66,4));
function checkMax($arr){
    $max = $arr[0][0];
    for($i = 0; $i < count($arr); $i++){
        for($j =0; $j<count($arr);$j++) {
            if ($max < $arr[$i][$j]) {
                $max = $arr[$i][$j];      }
        }
    }
    return $max;
}
echo "So lon nhat trong mang la ".checkMax($arr);

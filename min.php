<?php
$arr = array(1,3,4,6,8,9,0);
$min = $arr[0];
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] < $min) {
        $min = $arr[$i];
    }
}
echo "Gia tri nho nhat la ".$min;


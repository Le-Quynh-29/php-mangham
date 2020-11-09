<?php
$arr = array(array(1,2,3,45,6),
            array(2,4,5,77,8),
            array(7,8,2,0,-7),
            array(2,8,9,-5,-6),
            array(12,45,78,90,0));
$sum1 =0;
$sum2 =0;
$sum =0;
    for($i =0;$i<count($arr);$i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($i === $j) {
                $sum1 += $arr[$i][$j];
            }
        }
    }
echo "Tong duong cheo thu nhat la ".$sum1."<br>";
            for($i =0;$i<count($arr);$i++){
                for($j =0;$j<count($arr[$i]);$j++){
            if($i + $j == count($arr[$i]) -1){
                $sum2  += $arr[$i][$j];
            }
        }
    }
    echo "Tong duong cheo thu nhat la ".$sum2."<br>";
       $sum = $sum1 +$sum2;
    echo "tong 2 duong cheo la ".$sum;


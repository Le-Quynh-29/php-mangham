<form method="post">
    <input type="number" name="number">
    <input type="submit" value="submit">
</form>
<?php
$arr = array(array(1,4,45,6),
             array(6,88,8,9),
             array(5,6,8,0),
             array(36,8,0,8));
$sum = 0;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $number = $_POST["number"];
    if($number >=0 && $number <4 ){
        for($i =0; $i<count($arr);$i++){
            $sum += $arr[$i][$number];
        }
        echo "tong cua phan tu trong cot thu ".$number." la ".$sum;
    } else {
        echo "nhap so tu 0 den 3";
    }
}
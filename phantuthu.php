<form method="post">
    <input type="number" name="number">
    <input type="submit" value="submit">
</form>
<?php
$arr = array(60, 35, 99, 77, 36, 40 ,6 ,51, 73, 32, 90, 20 ,81, 66 ,78, 82, 7, 51, 72, 24, 29, 22, 57, 14, 94 ,43 ,65, 76, 48, 83, 88 ,11 ,78, 78 ,73 ,40, 80 ,50 ,83, 26, 28 ,56 ,22, 15, 73, 94 ,93, 38, 95, 40
);
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $number = $_POST["number"];
    if($number >= 0 && $number < count($arr)){
        for($i =0;$i<count($arr);$i++){
            if($number != $i){
            } else{
                echo "Phan tu thu ".$number." la ".$arr[$number];
                break;
            }
        }
    } else {
        echo "Chỉ số vượt quá giới hạn của mảng";
    }
}

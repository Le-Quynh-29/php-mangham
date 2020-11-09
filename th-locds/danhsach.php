<?php
$customer_list = array(
    "1" => array("name" => "Phan Hải Linh", "day_of_birth" => "2002/10/04", "address" => "Hà Nội", "profile" => "images/img1.png"),
    "2" =>array("name" => "Nguyễn Hoàng Tâm", "day_of_birth" => "2002/04/06", "address" => "Minh Châu", "profile" => "images/img2.png"),
    "3" =>array("name" => "Lê Đình Tuấn", "day_of_birth" => "2004/01/08", "address" => "Phú Châu", "profile" => "images/img3.png"),
    "4" =>array("name" => "Khuất Anh Quân", "day_of_birth" => "1998/06/05", "address" => "Phú Thọ", "profile" => "images/img4.png"),
    "5" =>array("name" => "Lê Thị Thúy Hường", "day_of_birth" => "2002/09/15", "address" => "Phú Ph", "profile" => "images/img5.png")
);
function searchByDate($customers, $from_date, $to_date) {
    if(empty($from_date) && empty($to_date)){
        return $customers;
    }
    $filtered_customers = [];
    foreach($customers as $customer){
        if(!empty($from_date) && (strtotime($customer['day_of_birth']) < strtotime($from_date)))
            continue;
        if(!empty($to_date) && (strtotime($customer['day_of_birth']) > strtotime($to_date)))
            continue;
        $filtered_customers[] = $customer;
    }
    return $filtered_customers;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body>
<?php
$from_date = NULL;
$to_date = NULL;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from_date = $_POST["from"];
    $to_date = $_POST["to"];
}
$filtered_customers = searchByDate($customer_list, $from_date, $to_date);
?>
<form method="post">
    Từ: <input id = "from" type="text" name="from" placeholder="yyyyy/mm/dd" value="<?php echo isset($from_date)?$from_date:''; ?>"/>
    Đến: <input id = "to" type="text" name="to" placeholder="yyyy/mm/dd" value="<?php echo isset($to_date)?$to_date:''; ?>"/>
    <input type = "submit" id = "submit" value = "Lọc"/>
</form>
<table border="1">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php foreach($filtered_customers as $index=> $customer): ?>
        <tr>
            <td><?php echo $index ;?></td>
            <td><?php echo $customer['name'];?></td>
            <td><?php echo $customer['day_of_birth'];?></td>
            <td><?php echo $customer['address'];?></td>
            <td><div class="profile"><img src="<?php echo $customer['profile'];?>"/></div> </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>

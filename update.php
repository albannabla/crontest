<?php 


date_default_timezone_set('Asia/Hong_Kong');
$date = date("Y-m-j G:i:s");
$con = mysqli_connect("localhost", "root", "", "cronjob");
$sql = "INSERT INTO last_update (Date) VALUES ('$date')";
$con->query($sql);
$con->close();




 ?>

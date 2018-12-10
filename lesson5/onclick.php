<?php
include "config.php";
$id = $_POST['id'];
$sql = "select clicks from path where id = '" . $id . "'";
$result = mysqli_query($link, $sql);
print_r($result);
$data = mysqli_fetch_assoc($result);
$click_count =  $data + 1;
$con = "update path set clicks='$click_count' where id='$id'";
mysqli_query($link, $con);

<?php
$path = "img_original/".$_FILES["file"]["name"];
if (move_uploaded_file($_FILES["file"]["tmp_name"], $path)){
    echo 'Файл загужен';
} else die("Возникла ошибка");
$percent = 0.5;
list($width, $height) = getimagesize($path);
$newWidth = $width * $percent;
$newHeight = $height * $percent;
$thumb = imagecreatetruecolor($newWidth, $newHeight);
$src = imagecreatefromjpeg($path);
imagecopyresampled($thumb, $src, 0,0,0,0,$newWidth,$newHeight,$width,$height);
imagejpeg($thumb, 'new_mini_img/'.$_FILES["file"]["name"]);
imagedestroy($thumb);

//if($_SERVER["REQUEST_METHOD"] == "POST"){
//    if(isset($_FILES["file"])){
//        move_uploaded_file($_FILES["file"]["tmp_name"],"img_original/".$_FILES["file"]["name"]);
//    }
//}
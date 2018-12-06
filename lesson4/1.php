<?php
$directory_small = 'img_min/';
$minis = scandir($directory_small);
$full_size = 'img_original/';

function imgRender($minis, $directory_small, $full_size)
{
    foreach ($minis as $value) {
        if ($value != '.' and $value != '..') {
            echo '<a target="_blanc" href="test.php?url='.$full_size.$value.'"><img src="' . $directory_small . $value . '"></a><br>';
        }
    }
}?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            margin: 0 auto;
            width: 700px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="container">
        <? imgRender($minis, $directory_small, $full_size) ?>

        <form action="upload.php" enctype="multipart/form-data" method="post" style="margin-top: 50px;">
            <input type="file" name="file">
            <input type="submit">
        </form>
    </div>
</body>
</html>

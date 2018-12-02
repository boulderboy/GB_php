<?php
function menuRender ($items) {
    echo "<ul>";
    foreach ($items as $item){
        if(is_array($item)) {
            echo "<li><ul>";
            foreach ($item as $secondLevel){
                echo "<li>$secondLevel</li>";
            }
            echo "</ul></li>";
        } else
            echo "<li>$item</li>";
    };
    echo "</ul>";
} ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?
    $items = ["one", ["two.one", "two.two"], "three"];
    menuRender($items);
?>
</body>
</html>

<?php
include("config.php");

$link = mysqli_connect(SERVER, USER, "", DATABASE)

or die("Ошибка ".mysqli_error($link));

$query ="SELECT * FROM path order by clicks desc ";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

echo "<div style= 'width: 700px; margin: 0 auto; display: flex; flex-wrap: wrap'>";

if($result) {
    foreach ($result as $value => $a) {
        echo '<div style="display: flex; flex-direction: column; align-items: center"><a href="new_image.php?name='
            . $a["name"] . '.' . $a["format"] . '" target="_blank"><img src="img_min/' . $a["name"] . '.' . $a["format"] . '"></a>
            <span style="display: block">' . $a["clicks"] . '</span>
           </div>';
    }

    mysqli_free_result($result);
}

echo "</div>";

mysqli_close($link);


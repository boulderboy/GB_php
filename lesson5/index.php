<?php

include("config.php");


$query ="SELECT * FROM path order by clicks desc ";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

echo "<div id='container' style= 'width: 700px; margin: 0 auto; display: flex; flex-wrap: wrap'>";

if($result) {
    foreach ($result as $value => $a) {
        echo '<div data-clcik="'.$a["clicks"].'" data-id="'.$a["id"].'" style="display: flex; flex-direction: column; align-items: center"><a href="new_image.php?name='
            . $a["name"] . '.' . $a["format"] . '" target="_blank"><img src="img_min/' . $a["name"] . '.' . $a["format"]
            . '"></a><span style="display: block">' . $a["clicks"] . '</span> </div>';
    }

    mysqli_free_result($result);
}

echo "</div>";

mysqli_close($link);

function test(){
    echo ("<div>test</div>");
}

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                         <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title>Document</title>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <script>
        (function(jQuery) {
          $("#container").on("click", "div", function() {
              var id = this.dataset.id;
              $.ajax({
                  type: "POST",
                  url: "onclick.php",
                  data: `id = ${id}`
              });
          })
        })($)
  </script>
</body>
</html>

<?php
    $paragraph = $_GET["paragraph"];
    $badword = $_GET["badword"];
    $cancelled_paragraph = str_replace($badword, "***",  $paragraph)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $paragraph ?>.</p>
    <div><?php echo strlen($paragraph) ?> caratteri</div>

    <h1><?php echo $cancelled_paragraph ?></h1>
    <div><?php echo strlen($cancelled_paragraph) ?> caratteri</div>
</body>
</html>
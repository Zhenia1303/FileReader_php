<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $file = fopen('text.txt', 'r');
    $plik = fread($file, filesize('text.txt'));
    $block = explode("\n", $plik);
    fclose($file);

    for ($i = 0; $i < sizeof($block); $i++) {
        echo "<div>$block[0]</div>";
    }

    ?>
</body>

</html>
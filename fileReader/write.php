<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <textarea name="text"></textarea>
        <button type="submit">Wysli</button>
    </form>

    <?php
    if (isset($_POST['text'])) {
        echo $_POST['text'];

        $file = fopen('text.txt', 'w');
        fwrite($file, $_POST['text'] . "\n");
        fclose($file);
    }

    $FileDate = getdate();
    echo '<br>' . "Data:" . " " . $FileDate['mday'] . "." . $FileDate['mon'] . "." .$FileDate['year'] . "." . $FileDate['hours'] . "." . $FileDate['minutes'] . "." . $FileDate['seconds'];
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shapes</title>
</head>

<body>
    <h2>1.</h2>
    <?php
    $rows = 5;

    for ($i = 1; $i <= $rows; $i++) {
        for ($j = $i; $j < $rows; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 0; $j < $i; $j++) {
            echo "*&nbsp;&nbsp;";
        }
        echo "<br>";
    }
    for ($i = $rows - 1; $i > 0; $i--) {
        for ($j = $rows; $j > $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 0; $j < $i; $j++) {
            echo "*&nbsp;&nbsp;";
        }
        echo "<br/>";
    }
    ?>
    <h2>2.</h2>
    <?php
    $rows = 5;
    for ($i = 0; $i <= $rows; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "*&nbsp;&nbsp;";
        }
        echo "<br/>";
    }
    for ($i = $rows; $i >= 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            echo "*&nbsp;&nbsp;";
        }
        echo "<br/>";
    }
    ?>
    <h2>3.</h2>
    <?php
    $rows = 5;
    for ($i = 0; $i <= $rows; $i++) {
        if ($i % 2 != 0) {
            for ($j = 0; $j < $i; $j++) {
                echo "*&nbsp;&nbsp;";
            }
            echo "<br/>";
        }
    }
    for ($i = $rows-1; $i >= 0; $i--) {
        if ($i % 2 != 0) {
            for ($j = 0; $j < $i; $j++) {
                echo "*&nbsp;&nbsp;";
            }
            echo "<br/>";
        }
    }
    ?>
</body>

</html>
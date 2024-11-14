<?php

$backgroundColor = isset($_COOKIE['background_color']) ? $_COOKIE['background_color'] : '#FFFFFF';

if (isset($_POST['save'])) {
    $backgroundColor = $_POST['color'];
    setcookie('background_color', $backgroundColor, time() + (30 * 24 * 60 * 60));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>

<body style="background-color: <?php echo $backgroundColor; ?>;">

    <h1>Select a Background Color</h1>

    <form method="post" action="">
        <label for="color">Choose a color:</label>
        <select name="color" id="color">
            <option value="#FFFFFF" <?php if ($backgroundColor == "#FFFFFF") echo "selected"; ?>>White</option>
            <option value="#FF0000" <?php if ($backgroundColor == "#FF0000") echo "selected"; ?>>Red</option>
            <option value="#0000FF" <?php if ($backgroundColor == "#0000FF") echo "selected"; ?>>Blue</option>
            <option value="#FFFF00" <?php if ($backgroundColor == "#FFFF00") echo "selected"; ?>>Yellow</option>
            <option value="#008000" <?php if ($backgroundColor == "#008000") echo "selected"; ?>>Green</option>
            <option value="#FFA500" <?php if ($backgroundColor == "#FFA500") echo "selected"; ?>>Orange</option>
        </select>
        <button name="save" type="submit">Save</button>
    </form>

</body>

</html>
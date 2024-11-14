<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
    <style>
        .chessboard {
            width: 336px;
            height: 336px;
            margin: 0 auto;
        }

        .white {
            background-color: #fff;
            width: 40px;
            height: 40px;
            border: 1px solid #000;
            float: left;
        }

        .black {
            background-color: #000;
            width: 40px;
            height: 40px;
            border: 1px solid #000;
            float: left;
        }
    </style>
</head>

<body>
    <div class="chessboard">
    <h2 style="text-align:center">Chessboard</h2>
        <?php
        for ($row = 0; $row < 8; $row++) {
            for ($col = 0; $col < 4; $col++) {
                if ($row % 2 == 0)
                    echo '<div class="black"></div><div class="white"></div>';
                else
                    echo '<div class="white"></div><div class="black"></div>';
            }
        }
        ?>
    </div>
</body>

</html>
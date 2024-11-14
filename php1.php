<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
    <style>
     
        td {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>

<table >
    <?php
    $size = 4; 

    for ($row = 0; $row < $size; $row++) {
        echo "<tr>";
        for ($col = 0; $col < $size; $col++) {
            if (($row + $col) % 2 == 0) {
                echo "<td class='white'></td>";
            } else {
                echo "<td class='black'></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>

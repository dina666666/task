<?php

//2
$rows = 10;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = $i; $j < $rows; $j++) {
        echo " ";
    }
        for ($k = 1; $k <= (1 * $i - 1); $k++) {
        echo "*";
    }

    echo "<br>";
}

for ($i = $rows - 1; $i >= 1; $i--) {
    for ($j = $i; $j < $rows; $j++) {
        echo " ";
    }
    for ($k = 1; $k <= (1 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
//3
$rows = 3;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = $i; $j < $rows; $j++) {
        echo " ";
    }
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }

    echo "<br>";
}

for ($i = $rows - 1; $i >= 1; $i--) {
    for ($j = $i; $j < $rows; $j++) {
        echo " ";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>

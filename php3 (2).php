<?php

$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

for ($i = 0; $i < count($array) - 1; $i++) {
    for ($j = 0; $j < count($array) - $i - 1; $j++) {
        if ($array[$j] > $array[$j + 1]) {
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }
}

echo "ASC: ";
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . " ";
}
echo "<hr>";

$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

for ($i = 0; $i < count($array) - 1; $i++) {
    for ($j = 0; $j < count($array) - $i - 1; $j++) {
        if ($array[$j] < $array[$j + 1]) {
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }
}

echo "DESC: ";
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . " ";
}

?>

<?php
$num = [10, 30, 20];
$max = $num[0];
if ($num[1] > $max) {
    $max = $num[1];
}
if ($num[2] > $max) {
    $max = $num[2];
}
echo "The largest number is: " . $max;

?>

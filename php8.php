<?php
$currentDate = new DateTime();
$currentDate->modify('-1 month');
$previousMonth = $currentDate->format('m');
echo " Date: " . $previousMonth;

?>

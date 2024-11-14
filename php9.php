<?php

$Text = "Dina Esam Mohamed";
$String = "Esam";
if (preg_match("/$String/", $Text)) {
    echo "The text contains the word.";
} else {
    echo " The text does not contain the word .";
}

?>

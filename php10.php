<?php
if (isset($_POST['background_color'])) {
    $color = $_POST['background_color'];
    setcookie('background_color', $color, time() + (30 * 24 * 60 * 60));
} else {
    $color = isset($_COOKIE['background_color']) ? $_COOKIE['background_color'] : '#ffffff'; // لون افتراضي أبيض
}

?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color: <?php echo $color; ?>;">

    <h2>select</h2>
    <form method="POST" action="">
        <select name="background_color">
        <option value="#ffffff">white</option>
        <option value="#ff0000">red</option>
         <option value="#ffa500">orange</option>
        </select>
        <br><br>
        <button type="submit">save</button>
    </form>

</body>
</html>

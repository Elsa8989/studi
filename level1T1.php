<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEVEL 1 A</title>
</head>
<body>
    <form action="" method="post">
        <label>Angka 1 : </label>
        <input type="int" name = "angka1">
        <br>
        <label>Angka 2 : </label>
        <input type="int" name = "angka2">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>


<?php

if (isset($_POST['submit'])) {
    $a = $_POST["angka1"];
    $b = $_POST["angka2"];

    if ( $a > $b ) {
        echo "Nilai terbesar adalah $a";
    } else {
        echo "Nilai terbesar adalah $b";
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head><title>Calculator</title><head>
<body>
<?php

// code for asking what operation
    $a = 42;
    $b = 20;

    $c = $a + $b;
    echo "Sum : $c </br>";
    $c = $a - $b;
    echo "Difference : $c </br>";
    $c = $a * $b;
    echo "Product : $c </br>";
    $c = $a / $b;
    echo "Quotient : $c </br>";
    $c = $a % $b;
    echo "Modulo : $c </br>";
    $c = $a++;
    echo "Increment : $c </br>";
    $c = $a--;
    echo "Decrement : $c </br>";

?>
</body>
</html
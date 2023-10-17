<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculator</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $operation = $_POST["operation"];
    $result = 0;

    if ($operation === "addition") {
        $result = $a + $b;
    } elseif ($operation === "subtraction") {
        $result = $a - $b;
    } elseif ($operation === "multiplication") {
        $result = $a * $b;
    } elseif ($operation === "division") {
        if ($b == 0) {
            echo "Error: Division by zero is not allowed. <br>";
        } else {
            $result = $a / $b;
        }
    } elseif ($operation === "modulus") {
        if ($b == 0) {
            echo "Error: Modulus by zero is not allowed. <br>";
        } else {
            $result = $a % $b;
        }
    } else {
        echo "Invalid operation selected. <br>";
    }

    echo "Result: $result <br>";
}
?>

<form method="post" action="">
    <label for="a">Enter the first number: </label>
    <input type="number" name="a" id="a" required><br>

    <label for="b">Enter the second number: </label>
    <input type="number" name="b" id="b" required><br>

    <label for="operation">Select an operation: </label>
    <select name="operation" id="operation">
        <option value="addition">Addition</option>
        <option value="subtraction">Subtraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
        <option value="modulus">Modulus</option>
    </select><br>

    <input type="submit" value="Calculate">
</form>
</body>
</html>

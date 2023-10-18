<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            margin: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        #result {
            font-weight: bold;
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div>
    <h1>Calculator</h1>
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

        echo '<div id="result">Result: ' . $result . '</div>';
    }
    ?>

    <form method="post" action="">
        <label for="a">Enter the first number:</label>
        <input type="number" name="a" id="a" required>

        <label for="b">Enter the second number:</label>
        <input type="number" name="b" id="b" required>

        <label for="operation">Select an operation:</label>
        <select name="operation" id="operation">
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
            <option value="modulus">Modulus</option>
        </select>

        <input type="submit" value="Calculate">
    </form>
</div>
</body>
</html>

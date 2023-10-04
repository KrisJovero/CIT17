<?php
define("MINSIZE", 50);
echo MINSIZE;
echo constant("MINSIZE"); // same thing as the previous line
?>

<?php
// Constants
define('Lear_ner', 'I am a beginner and a learner, the world is hard but please be easy with me.');
define('Ano_ther', 'Nice to meet you.');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Constants Example</title>
</head>
<body>
    <h1>Statements:</h1>
    <p><?php echo Lear_ner; ?></p>
    <p><?php echo Ano_ther; ?></p>
</body>
</html>

// This is method

<?php
// Define a constant with an appropriate name
define('Multiplication', 2);

// Use the constant
$input = 2;
$result = Multiplication * ($input * $input);

echo "The area of a circle with a radius of $input is: $result";
?>



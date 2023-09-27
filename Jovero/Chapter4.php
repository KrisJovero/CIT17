<?php

// integers
$int_var = 12345;
$another_int = -12345 + 12345;
echo $another_int;

//This is Doubles
$many = 2.2888800;
$many_2 = 2.2111200;
$few = $many + $many_2;
print(.$many + $many_2 = $few<br>.);

// Code for Boolean
if (TRUE)
print("This will always print<br>");
else
print("This will never print<br>");
$true_num = 3 + 0.14159;
$true_str = "Tried and true";
$true_array[49] = "An array element";
$false_array = array();
$false_null = NULL;
$false_num = 999 - 999;
$false_str = "";
//Null
$my_var = NULL;
//Strings
$string_1 = "This is a string in double quotes";
$string_2 = "This is a somewhat longer, singly quoted string";
$string_39 = "This string has thirty-nine characters";
$string_0 = ""; // a string with zero characters

$variable = "name";
$literally = 'My $variable will not print!\\n';
print($literally);
$literally = "My $variable will print!\\n";
print($literally);
//Here Document
$channel =<<<_XML_
<channel>
<title>What's For Dinner<title>
<link>http://menu.example.com/<link>
<description>Choose what to eat tonight.</description>
</channel>
_XML_;
echo <<<END
This uses the "here document" syntax to output
multiple lines with variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon. no extra whitespace!
<br />
END;
print $channel;
// local variables
$x = 4;
function assignx () {
$x = 0;
print "\$x inside function is $x. 
";
}
assignx();
print "\$x outside of function is $x. 
";
// multiply a value by 10 and return it to the caller - FUNCTION PARAMETERS
function multiply ($value) {
    $value = $value * 10;
    return $value;
}
$retval = multiply (10);
Print "Return value is $retval\n";
//Welcome to Global Variables
   $somevar = 15;
function addit() {
GLOBAL $somevar;
$somevar++;
print "Somevar is $somevar";
}
addit();
// Static Variables
function keep_track() {
    STATIC $count = 0;
    $count++;
    print $count;
    print "
   ";
}
keep_track();
keep_track();
keep_track();

    ?>

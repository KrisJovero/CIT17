<!DOCTYPE html>
<html>
<head>
  <title> PHP And SQL Script</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PHPScriptDemo"; 

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS PHPScriptDemo";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the database
$conn->select_db("PHPScriptDemo");

// SQL to create tables
$createStudentTable = "CREATE TABLE Student (
    StudentID INT PRIMARY KEY,
    FirstName VARCHAR(100),
    LastName VARCHAR(100),
    DateOfBirth DATE,
    Email VARCHAR(100),
    Phone VARCHAR(15)

INSERT INTO `student` (`StudentID`, `FirstName`, `LastName`, `DateOfBirth`, `Email`, `Phone
`) VALUES ('239000501', 'Julian', 'Trinidad', '1993-1-
04', 'JulianTrinidad1993@yahoo.com', '09061097844'),
('239000500', 'Clarence', 'Crisostomo', '1993-11-
06', 'clcrisostomo11@gmail.com’, '0916399444905')

)";

$createCourseTable = "CREATE TABLE Course (
    CourseID INT PRIMARY KEY,
    CourseName VARCHAR(100),
    Credits INT
    INSERT INTO `course` (`CourseID`, `CourseName`, `Credits`) VALUES ('10200', 'Gen. Ed.
Physical Education 1', '3'), ('10201', 'Gen. Ed. Physical Education 2', '3'), ('10202', 'Gen. Ed.
Physical Education 3', '3'), ('10203', 'Gen. Ed. Physical Education 4', '3'), ('10100', 'Gen. Ed. Art
Appreciation', '3'), ('10101', 'Gen. Ed. Ethics', '3'), ('10102', 'Gen. Ed. Contemporary World', '3')

)";

$createInstructorTable = "CREATE TABLE Instructor (
    InstructorID INT PRIMARY KEY,
    FirstName VARCHAR(100),
    LastName VARCHAR(100),
    Email VARCHAR(100),
    Phone VARCHAR(15)

    INSERT INTO `instructor` (`InstructorID`, `FirstName`, `LastName`, `Email`, `Phone`) VALUE
S ('230000200', 'Hardie', 'Batongbakal', 'stonehard59@gmail.com', '09023455091'), ('230000201'
, 'Antonette', 'Collado', 'atcl201@outlook.com', '09478821042')
)";


$createEnrollmentTable = "CREATE TABLE Enrollment (
    EnrollmentID INT PRIMARY KEY,
    StudentID INT,
    CourseID INT,
    EnrollmentDate DATE,
    Grade VARCHAR(2),
    FOREIGN KEY (StudentID) REFERENCES Student(StudentID),
    FOREIGN KEY (CourseID) REFERENCES Course(CourseID)
    
    INSERT INTO `enrollment` (`EnrollmentID`, `StudentID`, `CourseID`, `EnrollmentDate`,
`Grade`) VALUES ('23200', '239000500', '10100', '2024-01-04', '1');
)";

// Execute queries to create tables
if ($conn->query($createStudentTable) === TRUE &&
    $conn->query($createCourseTable) === TRUE &&
    $conn->query($createInstructorTable) === TRUE &&
    $conn->query($createEnrollmentTable) === TRUE) {
    echo "Tables created successfully";
} else {
    echo "Error creating tables: " . $conn->error;
}

$conn->close();
?>

</body>
</html>

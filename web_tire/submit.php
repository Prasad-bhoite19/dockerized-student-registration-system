<?php

$host="db";
$user="root";
$password="root123";
$db="studentdb";

$conn = new mysqli($host,$user,$password,$db);

if ($conn->connect_error) {
    die("Connection failed");
}

$name=$_POST['name'];
$email=$_POST['email'];
$course=$_POST['course'];

$sql="INSERT INTO students (name,email,course)
VALUES ('$name','$email','$course')";

if ($conn->query($sql) === TRUE){
    echo "Student Registered Successfully";
}
else{
    echo "Error";
}

$conn->close();

?>

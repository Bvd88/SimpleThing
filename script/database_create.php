<?php 

$conn = mysqli_connect("localhost","root","root",);

$sql = "CREATE DATABASE tabel"
if (mysqli_query($conn, $sql)) echo "<p> Database Created<p>" 

else echo ("<p>".mysqli_error($conn)."<p>" );

$sql = "USE tabel";
mysqli_query($conn,$sql);


$sql = "CREATE DATABASE users (
        id INT AUTO_INCREMENT PRIMARY KEY, 
        username VARCHAR (255) NOT NULL,
        email VARCHAR (255) NOT NULL,
        password VARCHAR (255) NOT NULL,


)"
if (mysqli_query($conn, $sql)) echo "<p> Database Created<p>" 

else die (mysqli_error($conn));


?>
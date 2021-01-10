<?php
    $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"register");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>
<!-- sql code -->
<!-- 
CREATE TABLE `register` (
  `ID` int(10) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` int(100) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; -->

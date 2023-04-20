<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname ="manage";
 $conn = new mysqli($host,$username,$password,$dbname);
if($conn->connect_error){
    die("connect error" .$conn->connect_error);
    
 } 
 $user = $_GET['user'];
 $sql = "SELECT * FROM tbl_signup WHERE name='$user'";
 $res = mysqli_query($conn,$sql);
 $rows = mysqli_num_rows($res);
 echo $rows;

 ?>
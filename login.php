<?php
if($_server["request_method"]=="post"){
// restrieve form data
$username = $_POST ['username'];
$password = $_post['password'];


 // database connection

 #host = "localhost";
 #dbusername = "root";
 $dbpassword = "";
 $dbname = "database";

 $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

 if($con->connect_error){
die("connection failed ;". $conn->connect_error);

 }

 // volidate login authentication
 $query = "select * from login where username='$username' and password='$password'";

 $result = $conn->query($query);

 if($result->num_rows==1){
    // login success
    exit();
 }
 else{
    // login failed
    exit();

 }

 $conn->close();


 }


?>
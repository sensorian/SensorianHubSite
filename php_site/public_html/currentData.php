<?php
//recent 10 record from the db
require 'dbconnect.php';
$user_id =  $_POST["uid"];
$sql_query = "SELECT * FROM data WHERE id like '$user_id'ORDER BY time_p DESC  LIMIT 10;";         
$result = mysqli_query($conn,$sql_query);  
 if(mysqli_num_rows($result) >0 )  
 {
 while($row = mysqli_fetch_assoc($result) )  {
 	$output [] = $row ; 
 }

 echo json_encode($output);
 }  
 else  
 {   
 echo "Login Failed.......Try Again..";  
 }                      
?>
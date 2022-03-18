<?php

include 'connection.php';
$conn=OpenCon();

$request = 2;

//echo "In Insert_Record.php";
// Insert record
if($request == 2){
   // Read POST data
   $data = json_decode(file_get_contents("php://input"));
   //echo"In insert req 2";
   $name = $data->name;
   $Date_of_birth = $data->DOB;
   $Age = $data->Age;
   $Address=$data->Address;
   $City=$data->city;
   $State=$data->state;
  
   // Insert record
   $sql = "INSERT INTO Patients_Record (Name,Date_of_birth,Age,Address,city,state) VALUES 
	('".$name."', '".$Date_of_birth."', '".$Age."', '".$Address."', '".$City."', '".$State."')";
   
   if($conn->query($sql)){
      //echo "Query Executed";
      echo 1; 
   }else{
      echo 0;
   }
  // echo json_encode(1);
     exit;
}

CloseCon($conn);

?>
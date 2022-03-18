<?php
include 'connection.php';
$conn=OpenCon();


$request=3;
if($request == 3){
   // Read POST data
   $data = json_decode(file_get_contents("php://input"));
   //echo"In insert req 2";
   $id = $data->id;
   $name = $data->name;
   $Date_of_birth = $data->DOB;
   $Age = $data->Age;
   $Address=$data->Address;
   $City=$data->city;
   $State=$data->state;

   $sql=" UPDATE Patients_Record set Name = '".$name."',Date_of_birth = '".$Date_of_birth."', Address = '".$Address."', city='".$City."',state='".$State."' where id=$id ";
   if($conn->query($sql)){
    echo 1; 
 }else{
    echo 0;
 }
     exit;
}
CloseCon($conn);
?>

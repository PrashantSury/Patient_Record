<?php

include 'connection.php';
$conn=OpenCon();
$request=4;
if($request == 4){
    
//echo $request;
$data = json_decode(file_get_contents("php://input"));
$id = $data->id;
   $sql=" DELETE FROM Patients_Record where id=$id ";
   
   if($conn->query($sql)){
    echo 1; 
}else{
    echo 0;
 }
     exit;
}
CloseCon($conn);
?>

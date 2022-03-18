
<?php

include 'connection.php';
$conn=OpenCon();

if(isset($_GET['request'])){
	$request = $_GET['request'];
 } 
// echo $request;
 // Fetch records 
 if($request == 1){
 
	// Select record 
	$sql = "SELECT * FROM Patients_Record ORDER BY id DESC" ;
	$pateintsData = $conn->query($sql);
 
	$response = array();
	while($row = $pateintsData->fetch_assoc()){
	  
	   $response[] = array(
		  "id" => $row['id'],
		  "name" => $row['Name'],
		  "DateOfBirth" => $row['Date_of_birth'],
		  "Age" => $row['Age'],
		  "Address" => $row['Address'],
		  "city" => $row['city'],
		  "state" => $row['state']
	   );  

	}
   echo json_encode($response);
	exit;
  }
CloseCon($conn);
?>

		

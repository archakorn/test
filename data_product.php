<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","1234","datadb");

$sqlQuery = "SELECT * FROM product ORDER BY pro_id";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>
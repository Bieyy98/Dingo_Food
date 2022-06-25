<?php
$search = $_POST['search'];

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'dingofood';

$conn=mysqli_connect($host,$user,$pass,$database);
if($conn){
}else{
     echo"Connection not successful" . mysqli_error($conn);
     die($conn);
}
$sql = "select * from refund where refund_id like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["refund_id"]."  ".$row["item"]."  ".$row["refund_time"]."<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>
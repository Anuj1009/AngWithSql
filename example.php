<?php

$servername='localhost';
  $dbname = 'demo';
$username='root';
$password='';
$conn = mysqli_connect($servername,$username, $password,$dbname );
if (!$conn) {
    die("Connection failed: ");
}
echo "Connected successfully";
$query="SELECT *from tbemployee";
$result=mysqli_query($conn,$query);
$data=array();
while($row = mysqli_fetch_array($result)) {
  $data[]=$row;
    // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["gender"]." ". $row["deptid"]. "<br>";
//    echo $data[];
   }
 echo json_encode($data);
 mysqli_close($conn);
?>

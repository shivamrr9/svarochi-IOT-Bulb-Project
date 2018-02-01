<?php
include("connect.php");

$sql = "SELECT * FROM piData ORDER BY id DESC LIMIT 1";
$result = $con->query($sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) 
	{
		echo $row["a1"];
	}
} 
else 
{
    echo "0";
}
?>

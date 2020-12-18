<?php
session_start();
$phone=$_SESSION['phone'];
//echo $phone;
$conn=mysqli_connect("localhost","root","","wt");
$query="select * from user where phone='$phone'";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res))
{   echo "<form action='logout.php' method='POST'>";
	echo "Hiii! ".$row[0]."<br>";
	echo "Your mobile number: ".$row[1]."<br>";
	echo "Your address: ".$row[4]."<br>";
	echo "<input type='submit' value='logout'>";
	echo "</form>"; 
}
?>

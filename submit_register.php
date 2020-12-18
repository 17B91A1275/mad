<html>
<head>
</head>
<body>
<?php
   $name=$_POST["name"];
   $phone=$_POST["phone"];
   $password=$_POST["password"];
   $gender=$_POST["gender"];
   $address=$_POST["address"];
   $conn=mysqli_connect("localhost","root","","wt");
   $query="insert into user (name,phone,password,gender,address) values ('$name','$phone','$password','$gender','$address')";
   	session_start();
	mysqli_query($conn,$query);
  	$_SESSION['phone'] = $phone;
     header('location: profile.php');
 ?>
</body>
</html>
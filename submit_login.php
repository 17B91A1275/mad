<?php
$phone=$_POST['phone'];
$password=$_POST['password'];
$conn=mysqli_connect("localhost","root","","wt");
$query="select * from user where phone='$phone' and password='$password'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0)
{
   session_start();
   $_SESSION['phone']=$phone;
  header('Location:profile.php');
}
else
{
  header('Location:login.php?pwderror');
}
?>
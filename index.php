<?php
// echo"connected";
// echo"<br>";
// $servername="localhost";
// $username="sherwin";
// $password="";
// $database_name="test";
// $conect="$mysqli_";
// $conn=mysqli_connect($servername,$username,$password,$database_name);
// if(!$conn){
//   die("conection faild".mysqli_connect_error());
// }
$connect=mysqli_connect("localhost","sherwin","","test") or die("filed");
if(!empty($_POST['save']))
{
  $name=$_POST['name'];
  $age=$_POST['age'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $query="select * from data where name='$name', age='$age',email='$email',password='$password'";
  // $mysqli_connect="INSERT INTO 'test'.`data` (`name`, `age`, `email`, `password`) VALUES ('$name', '$age', '$email', '$password')";
  $result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);
  if($count>0)
{
  echo"sucess";
}
else
{
  echo"unsucess";
}
}
?>
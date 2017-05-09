<html>
<body>
<?php
$uname=$_GET["c1"];
$password=$_GET["pass"];

$con=mysqli_connect("localhost","root","1234","joseph");
$rows=mysqli_query($con,"select * from franklin where cusname='$uname' AND accnum ='$password'");
$count=mysqli_num_rows($rows);
if($count==0)
{
echo"invalid";

}
else
{
header("location:index.html");

}
mysqli_close($con);

?>
</body>
</html>

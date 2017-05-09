<html>
<body>
<?php
$accnum=$_GET["accnum"];
$cname=$_GET["cname"];
$balance=$_GET["balance"];
$acctype=$_GET["acctype"];

$con=mysqli_connect("localhost","root","1234","joseph");
$rows=mysqli_query($con,"insert into franklin values('$accnum','$cname','$balance','$acctype')");
mysqli_close($con);

?>
</body>
</html>

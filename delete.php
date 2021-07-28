<?php
include_once 'dbcon.php'
?>
<html>
<head>
</head>
<body>
<?php

$idno=$_POST['id'];




	


$sqli="DELETE FROM info WHERE idno='$idno'";




if($con->query($sqli)===TRUE)
{
	echo"Record Deleted Successfully";
}
else
{
	echo"Error Deleting record:".$con->error;
}
$con->close();


?>
</body>
</html>
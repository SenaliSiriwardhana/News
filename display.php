<?php
include_once 'dbcon.php'
?>

<html>
<head><title>WELCOME TO GLOBAL NEWS</title>
</head>
<body>
<header>
<img src="glo.png" width="140px" height="140px"><img src="wo.png"width="500px" height="140px">
</header>
<hr>


<table width="100%">
<?php

$data="SELECT img,title ,info FROM info";
$result=mysqli_query($con,$data);
while($rows= mysqli_fetch_assoc($result))
{
	
?>
<tr>
	<td><?php echo $rows['img'];?></td>
	<td><h3><?php echo $rows['title'] ;?></h3><br><?php echo $rows['info'] ;?><hr></td>
</tr>
<?php
}
?>
</table>





</table>
<hr>
<center>
<font color="#b8b894" size=5>

<footer >
  <p> All Rights Reserved.</p>
  </font>
  <br>
  <font size=1 color="#e0e0d1">NAB</font>
</footer>

</center>

</body>
</html>
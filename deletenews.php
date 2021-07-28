<?php
include_once 'dbcon.php';


?>



<html>
<head><title>Global News-Delete News</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<title>Delete News</title>
<style>
body {
  background-color: #cceeff;
}
input[type=submit]
{
	width: 100%;
    padding: 5px 10px;
  
    border: 1px solid #ccc;
  
 	
}
input[type=reset]
{
	width: 100%;
    padding: 5px 10px;
 
    border: 1px solid #ccc;	
}
th
{
	color:red;
}


</style>
</head>
<body>
<header>
<img src="glo.png" width="140px" height="140px"><img src="wo.png"width="500px" height="140px">
</header><hr>

<table  border=1 align="center" width="700px" height="60px">
<tr>
<th colspan="2"><h2><center><font face="Century Schoolbook">Entered News</center></h2></td>
</th>
<tr>
<th>ID NO</th>
<th>Title</th>
</tr>

<?php

$data="SELECT idno,title FROM info";
$result=mysqli_query($con,$data);
while($rows= mysqli_fetch_assoc($result))
{
	
?>
<tr>
	<td><?php echo $rows['idno'];?></td>
	<td><?php echo $rows['title'];?></td>
</tr>
<?php
}
?>
</table>



<br><br>
<font face="Harrington">
<table align="center" border=0 >
<form method="POST" action="delete.php">
<tr>
<th>IDNO:</th>
</tr>
<tr><td>
<input type="text" name="id">
</td></tr>

<tr>
<td><br><input type="submit" name="delete" value="Delete" class="btn btn-primary btn-lg active" >
</td></tr>

</form>
</table>
</font>
<br>
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
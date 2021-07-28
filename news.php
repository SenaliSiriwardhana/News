<?php
include_once 'dbcon.php'
?>

<html>
<head>
<title>Global News-Insert News</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">



</script>
<style>
table
{
    color:blue;
    font-family:Harrington;
}



input[type=text]
{
    width: 98%;
    padding: 5px 10px;
    margin: 8px 0;
    
    border: 1px solid #ccc;
   
}
input[type=textarea]
{
	
    width: 98%;
    padding: 20px 40px;
}

input[type=file]
{
	
    width: 98%;
    padding:10px 20px;
   
   
   
}
input[type=submit]
{
	width: 40%;
    padding: 10px 20px;
    margin: 8px 0;
    border: 1px solid #ccc;
  
 	
}
input[type=reset]
{
	width: 40%;
    padding: 10px 20px;
 
    border: 1px solid #ccc;	
}



</style>

</head>
<body onload="select()">

<header>
<img src="glo.png" width="140px" height="140px"><img src="wo.png"width="500px" height="140px">
</header><hr>
<form method="POST" action="news.php">

<table  height="100px"align="center" >

<tr>
<th>ID NO:</th>
<td><input type="text" name="id" placeholder="Enter the ID Number" class="btn btn-light" ></td>
</tr>
<tr>
<th>Title:</th>
<td><input type="text" name="title" placeholder="Title" class="btn btn-light"></td>
</tr>
<tr>
<th>Image:</th>
<td><input type="file" name="image" class="btn btn-light"></td>
</tr>
<tr>
<th>Information:</th>
<td><textarea id="textarea" name="comment" placeholder="More information"  class="btn btn-light" cols="45" rows="4"></textarea></td>
</tr>
<tr>
<th>Reporter's Name:</th>
<td><input type="text" name="rno" class="btn btn-light" placeholder="R_No"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Submit" class="btn btn-info">  <input type="reset" value="Reset" class="btn btn-danger"></td>

</tr>

</table>
</form>
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
<?php

$idno=$_POST['id'];
$title=$_POST['title'];
$img=$_POST['image'];
$info=$_POST['comment'];
$rno=$_POST['rno'];


$sql="INSERT INTO info 
    values ('$idno','$title','$img','$info','$rno')";


if($con->query($sql)===TRUE)
    {
        echo"New Record entered successfully.<br>";
    }
else
    {
        echo("Error".$con->error);
    }
$con->close();




?>
</body>
</html>

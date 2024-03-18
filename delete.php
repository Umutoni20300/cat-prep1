<?php  
if (isset($_POST['Yes'])) { 
$user= $_GET['id']; 
//echo $user; 
// Query to connect to Database 
$conn=mysqli_connect("mysql","root","","schooldb")or 
die(mysqli_connect_error()); 
$sql="DELETE FROM tbl_student WHERE id=$user"; 
$query=mysqli_query($conn,$sql); 
header("location:table.php"); 
}  ?> 
<html> <heard><title> Delete</title></head> 
<body> 
<p style="color: red">Are you sure to delete ?</p> 
<form method="post">  <center>  
<table "> 
<tr><td> <input type="submit" name="Yes" value="Yes" > </td> 
<td> <a href="table.php">No</a> </td> </tr> 
</table> 
</center></form></body> </html> 
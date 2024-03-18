
<?php 
if (isset($_GET['id'])) { 
$get_id=$_GET['id']; 
$conn=mysqli_connect("mysql","root","","schooldb"); 
$sql="SELECT * FROM tbl_student WHERE id=$get_id"; 
$query=mysqli_query($conn,$sql) or die(mysqli_error($conn)); 
if($query){ 
while($row=mysqli_fetch_assoc($query)){ 
$id=$row['id']; 
$firstname=$row['firstname']; 
$lastname=$row['lastname']; 
$regno=$row['regno']; 

?> 
<!DOCTYPE html> 
 
<html> 
<head> 
<title> VIEW</title> 
</head> 
<body> 
<table border="1"> 
<tr>  <td>ID</td><td><?=$id;?></td> </tr> 
<tr> <td>LAST NAME</td> <td><?=$firstname;?></td> </tr> 
<tr> <td>LAST NAME</td> <td><?=$lastname;?></td> </tr> 
<tr> <td>REGISTRATION NUMBER</td> <td><?=$regno;?></td> </tr> 

</table> 
</table> 
<a  href="table.php">back</a>
</body> 
</html> 

<?php 
}  } } ?> 
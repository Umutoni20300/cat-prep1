
<html> 
<head> 
<title> Table</title> 
</head> 
<body> 
<a href="register.php">Create</a>  
<table border="22" > 
<tr><td>ID</td><td>FIRST NAME</td><td>LAST NAME</td><td>REGISTRATION NUMBER</td><td colspan="3">Action</td></tr> 
<?php 
$conn=mysqli_connect("mysql","root","","schooldb")or 
die(mysqli_connect_error()); // connect to database 
//Query to select all in Table 
$sql="SELECT * FROM tbl_student"; 
$query=mysqli_query($conn,$sql); 
while($data=mysqli_fetch_assoc($query)){ 
?> 

<tr> <td><?php echo $data['id']?></td> 
<td><?php echo $data['firstname']?></td> 
<td><?php echo $data['lastname']?></td> 
<td><?php echo $data['regno']?></td> 
<td><a href="view.php?id=<?=$data['id']?>">Read</td> 
<td><a href="update.php?id=<?=$data['id']?>">Update</td> 
<td><a href="delete.php?id=<?=$data['id']?>">Delete</td> </tr> 
<?php  
} 
?> 
</table>  
</body>  
</html> 
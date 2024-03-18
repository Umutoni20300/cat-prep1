<!DOCTYPE html> 
<html> 
<head> 
<title>Update</title> 
</head> 
<body> 
<form method="POST"> 
    <center>
<table> 
<?php 
$id=$_GET['id']; 
$conn=mysqli_connect("mysql","root","","schooldb")or 
die(mysqli_connect_error()); 
$sql="SELECT * FROM tbl_student WHERE id= $id"; 
$query=mysqli_query($conn,$sql); 
while($data=mysqli_fetch_assoc($query)){ 
?> 
<tr><td>First Name</td><td><input type="text" name="firstname"  
value="<?=$data['firstname'];?>" placeholder="Update first name"  ></td></tr> 
<tr><td>Last name</td><td><input type="text" name="lastname"  
value="<?=$data['email'];?>" placeholder="Update last name"></td></tr> 
<tr><td>Reg Number</td><td><input type="text" name="regno"  
value="<?=$data['level'];?>" placeholder="Update regno "></td></tr> 

<tr> <td><input type="submit" name="submit"  value="send"></td></tr> 
<?php 
}if (isset($_POST['submit'])) { 
$newname=$_POST['firstname']; 
$newemail=$_POST['lastname']; 
$newlevel=$_POST['regno']; 

 
// Query to UPDATE in table call students  
$sql1="UPDATE tbl_student SET firstname='$newname', lastname='$newemail', 
regno='$newlevel' WHERE id=$id"; 

$query=mysqli_query($conn,$sql1) or die(mysqli_error($conn)); 


 

}?> 
</table> 
</center> 
</form> 
<center><a href="./table.php">view updated</a></center>
</body> 
</html> 
<?php 
if(isset($_POST['submit'])){ 
$dbconn=mysqli_connect("mysql","root","","schooldb"); // Database connetion 
// inserting in Database 
$firstname=$_POST['firstname']; 
$lastname=$_POST['lastname']; 
$regno=$_POST['regno']; 

$sql="INSERT INTO tbl_student SET firstname='$firstname',  
lastname='$lastname',regno='$regno'"; 
$quer =mysqli_query($dbconn,$sql); 
header("location:table.php"); 
} ?> 
<!DOCTYPE html> <html> <head>  <title> Form to Register</title> 


        <div>

</head>  <body background="">  <table> <form action="" method="POST"> 
<tr><td>First Name</b></td><td><input type="text" name="firstname"  ></td></tr> 


<tr><td>Last Name</b></td><td><input type="text" name="lastname" ></td></tr> 
<tr><td>Registration Number</b></td><td><input type="text" name="regno" ></td></tr> 

<tr><td><input type="submit" name="submit" id=""></td> 
<td><a  href="table.php" >View</a></td></tr> 
</div>
</form> </table></body> </html> 
  
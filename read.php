<!DOCTYPE html>
<html>
<body>
<?php
$servername = "mysql";
$username = "root";
$password = "";
$dbname="schooldb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname,regno FROM tbl_student";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<b>id:</b> " . $row["id"]. " <b>Names:</b> " . $row["firstname"]. " " . $row["lastname"]. ", <b>Regno:</b>" . $row["regno"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<a href="./about.php">Open about us page</a>
</body>
</html>
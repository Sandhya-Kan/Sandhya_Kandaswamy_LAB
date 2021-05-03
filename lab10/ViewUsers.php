<!DOCTYPE html>
<html>
<body bgcolor='pink'>
<?php
if(isset($_POST['submit'])) {


$mysqli = new mysqli("mysql.eecs.ku.edu", "sankandaswamy", "Eez4uHae","sankandaswamy");
/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}


$result = $mysqli->query("SELECT user_id FROM users");

if($result->num_rows>0){
echo "<h1 style='background-color: rgba(255,182,193,1);text-align: center'>Here is your Users list !!</h1>";
echo "<table border =\"2\" style='border-collapse: collapse; font-size: 30px;width:300px ; height:50px ;text-align: center;margin-left: auto;margin-right: auto'><tr><th>USER ID</th></tr>";

while ($row = $result -> fetch_assoc()) {
	echo "<tr style='text-align: center'><td>".$row["user_id"]."</td></tr>";
}

echo "</table>";
  $result -> free_result();
}
else{
	echo "<h2 style=background-color: rgba(255,182,193,1)>No data exists in table </h2>";
}


$mysqli->close();
}
?>
</body>
</html>

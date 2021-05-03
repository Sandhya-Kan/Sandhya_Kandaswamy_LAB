<!DOCTYPE html>
<html>
<body bgcolor='pink'>
<link rel="stylesheet" href="styles1.css" />
<h1 style='background-color: rgba(255,182,193,1);text-align: center'>View your Users posts here !!</h1>
<form method="post" style='font-size: 30px;text-align: center'  action="ViewUserposts.php">
<label style='font-size: 30px;text-align: center' for="users"><b>Select the User:</b></label>
<select name="myuser" id="myuser" style='width:200px; height:40px;text-align: center'>
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

while ($row = $result->fetch_assoc()) {
	echo '<option style="font-size: 30px" value="' . $row['user_id'] . '">' . $row['user_id'] . '</option>'; 
}
  $result -> free_result();
}
$mysqli->close();
}
?>
</select>
<BR>
<BR>
<BR>
<input style='  background-color: #DB7093;font-size: 20px;width:150px ; height:50px' type="submit" name="submit" value="SUBMIT" />
</form>
</body>
</html>
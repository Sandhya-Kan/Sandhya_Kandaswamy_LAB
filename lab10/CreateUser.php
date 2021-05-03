<!DOCTYPE html>
<html>
 <link rel="stylesheet" href="styles1.css" />
<body bgcolor='pink'>
<nav class="nav main-nav">
             
                    <a href="index.html">HOME</a>
            </nav>
<?php
if(isset($_POST['submit'])) {
	$userid=$_POST["userid"];
if($userid == "")
{
echo "<h1 bgcolor='pink'>UserID can't be left blank !</h1>";
}
else{
$mysqli = new mysqli("mysql.eecs.ku.edu", "sankandaswamy", "Eez4uHae","sankandaswamy");
/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}


$result = $mysqli->query("SELECT user_id FROM users where user_id='$userid'");

if($result->num_rows>0){

	echo "<h1 bgcolor='pink'>$userid already exists !</h1>";
	exit();
}
 /* free result set */
$mysqli->query("INSERT INTO users(user_id) VALUES('$userid')");
echo "<h2 style=background-color: rgba(255,182,193,1)>Added User - $userid successfully</h2>";
$mysqli->close();
}
}
?>
</body>
</html>

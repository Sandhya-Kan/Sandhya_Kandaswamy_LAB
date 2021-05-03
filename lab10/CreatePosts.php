<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styles1.css" />
<body bgcolor='pink'>
<nav class="nav main-nav">
             
                    <a href="index.html">HOME</a>
            </nav>

<?php
if(isset($_POST['submit'])) {
	$userid=$_POST["username"];
	$postcontent=$_POST["postcontent"];

if($postcontent == "" || userid=="")
{
echo "<h1 bgcolor='pink'>Post/UserID cannot be blank !</h1>";
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


	$mysqli->query("INSERT INTO posts(content,author_id) VALUES('$postcontent','$userid')");
    echo "<h1 style=background-color: rgba(255,182,193,1)>Added post of $userid successfully !!</h1>";
}
 /* free result set */
else{
	echo "<h1 bgcolor='pink'>$userid does not exists and post cannot be saved!</h1>";
}

$mysqli->close();
}
}
?>
</body>
</html>

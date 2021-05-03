<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styles1.css" />
<body bgcolor='pink'class="main-nav">
<nav >
             
    <a  style='text-align: center;
    font-size: 0.5em;
    font-weight: lighter;
	color: black;
    border-bottom: 1px solid rgba(255,182,193,1);margin-left: auto;margin-right: auto' href="index.html">HOME</a>
					<a style='text-align: center;
    font-size: 0.5em;
    font-weight: lighter;
	color: black;
    border-bottom: 1px solid rgba(255,182,193,1);margin-left: auto;margin-right: auto' href="AdminHome.html">ADMIN HOME</a>
            </nav>
<?php
if(isset($_POST['submit'])) {

if(!empty($_POST['myuser'])) {
	$userid=$_POST['myuser'];
$mysqli = new mysqli("mysql.eecs.ku.edu", "sankandaswamy", "Eez4uHae","sankandaswamy");
/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}

$result = $mysqli->query("SELECT content FROM posts where author_id='$userid'");

if($result->num_rows>0){
echo "<h1 style='background-color: rgba(255,182,193,1);text-align: center'>Here are the posts written by User - $userid !!</h1>";
echo "<table border =\"2\" style='border-collapse: collapse; font-size: 30px;width:600px ; height:50px ;text-align: center;margin-left: auto;margin-right: auto'><tr></tr>";

while ($row = $result -> fetch_assoc()) {
	echo "<tr style='text-align: left'><td style='background-color: #FFFFFF'>".$row["content"]."</td></tr>";
}

echo "</table>";
  $result -> free_result();
}
else{
	echo "<h2 style=background-color: rgba(255,182,193,1)>$userid did not write any posts !	</h2>";
}


$mysqli->close();
}
else {
        echo 'Please select the value.';
    }
}

?>
</body>
</html>

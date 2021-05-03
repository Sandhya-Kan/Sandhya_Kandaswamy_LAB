<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styles1.css" />
<body bgcolor='pink'class="main-nav">
<nav >
             
                    <a  style='text-align: center;
    font-size: 0.5em;
    font-weight: lighter;
	color: black;
    border-bottom: 1px solid rgba(255,182,193,1)'href="index.html">HOME</a>
					<a style='text-align: center;
    font-size: 0.5em;
    font-weight: lighter;
	color: black;
    border-bottom: 1px solid rgba(255,182,193,1)' href="AdminHome.html">ADMIN HOME</a>
            </nav>
<?php
if(isset($_POST['submit'])) {

if(!empty($_POST['checkbox'])){
echo "<h1 style=background-color: rgba(255,182,193,1)>Below mentioned PostID's has been deleted.</h1>";

foreach($_POST['checkbox'] as $selected){

$mysqli = new mysqli("mysql.eecs.ku.edu", "sankandaswamy", "Eez4uHae","sankandaswamy");
/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}

$mysqli->query("delete FROM posts where post_id=$selected");


echo "<h2 style=background-color: rgba(255,182,193,1)>Post ID : $selected</h2>";
$mysqli->close();
}
}
}
?>
</body>
</html>

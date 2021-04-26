<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php
echo "<h1 bgcolor='pink'>Mulitplication Table</h1>";
?>
</head>
<body>
<?php
 echo "<table border =\"2\" style='border-collapse: collapse; width:400px'>";
	for ($row=1; $row <= 10; $row++) {
		echo "<tr> \n";
		for ($column=1; $column <= 10; $column++) {
		   $m = $column * $row;
		   echo "<td bgcolor='pink'>$m</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>
</body>
</html>

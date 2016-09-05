<?php 
	// product
    require_once ("settings.php");
 
    $conn = @mysqli_connect($mysql_host,
    $user,
    $pwd,
    $sql_db);
    // Checks if connection is successful
    if (!$conn) 
    {
        // Displays an error message
        echo "<p>Database connection failure</p>";
    } 
    else 
    {
        echo "<p>Connected to the database <b>$sql_db</b></p>";
	echo '<link href="styles/style.css" rel="stylesheet" type="text/css"/>';
	echo "<title>View User</title>";
echo '<link href="styles/style.css" rel="stylesheet" type="text/css"/>';
	echo "<h1>View User</h1>";
	echo '<nav>
			<ul>
				<li><a href="input.php">User</a> |	</li>
				<li><a href="view.php">View</a> |</li>
			</ul>
		  </nav>
	
	';
 
	echo"<h2>User Inventory</h2>";
	
	$sql = 'SELECT name, dob, alive, timestamp FROM USER';
	
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0)
	{
  		echo '<table border="1">
			<thead>
				<tr>
					<th>Name</th>
					<th>Dob</th>
					<th>Timestamp ($)</th>
					<th>Days Alive</th>
				</tr>
			</thead>
			<tbody>';
    	while($row = mysqli_fetch_assoc($result)) 
    	{
    		print "<tr> <td>";
			echo  $row["name"];
			print "</td> <td>";
			echo  $row["dob"];
			print "</td> <td>";
			echo $row["alive"];
			print "</td> <td>";
			echo $row["timestamp"];
			print "</td> </tr>";    	
	}
	echo '</tbody> </table>';
	}
	else
	{
		echo"database connected but failed to display";
	}
	
    }
    // close the database connection
        mysqli_close($conn);
 
?>
<?php 
	// order
    require_once ("../settings.php");
 
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
        $sql = 'INSERT INTO `USER`(`timestamp`, `name`, `dob`) VALUES (' . $_POST["timestamp"] . ',"' . $_POST["name"] . '","' . $_POST["dob"] . ')';
        
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo 'done';
        }
        else {
            echo die(mysqli_error($conn));
        }
    }
	
    // close the database connection
        mysqli_close($conn);
?>
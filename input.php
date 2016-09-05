<?php   
echo "<title>New User</title>";
echo '<link href="styles/style.css" rel="stylesheet" type="text/css"/>';
	echo "<h1>New User</h1>";
	echo '<nav>
			<ul>
				<li><a href="input.php">User</a> |	</li>
				<li><a href="view.php">View</a> |</li>
			</ul>
		  </nav>
	
	';
	echo "<h2>New User</h2>";		  
echo '<script>

function createUser(){
	var name = document.getElementsByName("name")[0].value;
	var dob = document.getElementsByName("dob")[0].value;
	var timestamp = ;
	
	var http = new XMLHttpRequest();
	http.open("POST", "/actions/createuser.php", false);
	http.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	var params = "timestamp=" + timestamp + "&name=" + name +"&dob=" + dob;
	http.send(params);
	
	var response = http.responseText;
	if (response == "done") {
		alert("Successfully added " + name);
	} 
	else {
		alert("Failed to create user (" + name + ")! [" + response + "]");
	}
}
</script>';

echo '<br>Name <input type="text" name="name" size="20"><br>
         <br>dob <input type="text" name="dob" size="10"><br>';
echo '<button id="reset" onclick="clearList()">Reset</button> <button id="add" onclick="createUser()">Add</button>';
		  
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>

<?php
// include database connection file
include_once("config1.php");
// Display selected user data based on id
// Getting id from url

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM MyGuests WHERE id='$_GET[id]'");

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	$firstname = $row['firstname'];
	$email = $row['email'];
	$lastname = $row['lastname'];

?>

<?php

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['Update']))
{	
                $id = $_POST['id'];
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];

	 mysqli_query($mysqli,"UPDATE MyGuests SET firstname='$firstname' lastname='$lastname' email='$email'
                 WHERE id='$id'");

	
	// Redirect to homepage to display updated user in list
	header("Location: exe5.php");
}
?>
<body>
	<a href="exe5.php">Home</a>
	<br/><br/>
	
	<form  method="post" action="exe53.php">
		<table border="0">
			<tr> 
				<td>Firstname</td>
				<td><input type="text" name="firstname" value=<?php echo $firstname;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>Lastname</td>
				<td><input type="text" name="lastname" value=<?php echo $lastname;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_POST['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>


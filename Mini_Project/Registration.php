<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		
	</title>
</head>
<body>
<h1>Registration</h1>
<form method="POST" action=" re_check.php" >
<table >


	<tr>
		<td>ID :</td>
		<td><input type="username" name="username"></td>
	</tr> 

	<tr>
		<td>Password:</td>
		<td><input type="Password" name="Password"></td>
	</tr> 

<tr>
	<td>
		Confirm Password:
	</td>
	<td><input type="Password" name="pass">  </td>
</tr>

</tr>
<tr>
		<td> Name :</td>
		<td><input type="text" name="name"></td>
	</tr>
<tr>
	<td>Email :
	</td>
	<td><input type="email" name="email" > </td>
</tr>
	<tr><td>User Type:
	</td>
	<td><select name="type">
		<option value="" >User</option>
		<option value="">Admin</option>
		
	</select> </td> </tr> 

	<tr>
	<td></td>
	<td><input type="submit" name="Register" value="Register">
		<a href="Login.php">Login</a>
	</td>

</tr>

</table>

</form>

</body>
</html>
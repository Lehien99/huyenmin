<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action ="doReister.php" >
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="txtName"></td>
			</tr>
			<tr>
				<td>Country</td>
				<td>
					<select name ="cbCourse">
						<option value="C#">C#</option>
						<option value="Java">Java</option>
						<option value="Cloud">Cloud</option>					
					</select>
				</td>
			</tr>
		<tr>
			<td>Date of Birth</td>
			<td><input type="Date" name="Dob"/></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="Female">Female
			</td>
		</tr>
		<tr>
			<td>Favorites</td>
			<td>
				<input type="checkbox" name="book" value="book">Book
				<input type="checkbox" name="car" value="car">Cars
			</td>
		</tr>
	</table>
	
	
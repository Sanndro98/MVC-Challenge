<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>

<h1>Buat Account Baru!</h1>

<h3>Sign Up Form</h3>
<form action="/welcome" method="POST">
	{{csrf_field()}}
	<label for="first_name">First Name:</label>
	<br><br>
	<input type="text" name="first_name">
	<br><br>
	<label for="last_name">Last Name:</label>
	<br><br>
	<input type="text" name="last_name">
	<br><br>
	<label>Gender:</label>
	<br><br>
	<input type="radio" name="Gender" value="Male">Male
	<br>
	<input type="radio" name="Gender" value="Female">Female
	<br>
	<input type="radio" name="Gender" value="Other">Other
	<br><br>
	<label>Nationality</label>
	<br><br>
	<select name="Nationality">
		<option value="Indonesian">Indonesian</option>
		<option value="Singapuran">Singapuran</option>
		<option value="Malaysian">Malaysian</option>
		<option value="Australian">Australian</option>
	</select>
	<br><br>
	<label>Language Spoken:</label>
	<br><br>
	<input type="radio" name="bahasa" value="Bahasa_Indonesia">Bahasa Indonesia
	<br>
	<input type="radio" name="bahasa" value="Bahasa_English">English
	<br>
	<input type="radio" name="bahasa" value="Other">Other
	<br><br>
	<label for="bio">Bio:</label>
	<br><br>
	<textarea cols="35" rows="10" id="bio"></textarea>
	<br>
	<input type="submit" value="Sign Up">
</form>
</body>
</html>
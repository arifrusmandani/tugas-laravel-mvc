<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up - SanberBook</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>

	<form action="/welcome" method="POST">
		@csrf
		<label for="first_name">First name :</label><br><br>
		<input type="text" name="first_name" id="first_name" required><br><br>

		<label for="last_name">Last name :</label><br><br>
		<input type="text" name="last_name" id="last_name"><br><br>

		<label for="gender">Gender :</label><br><br>
		<input type="radio" id="male" name="gender" value="male">
 		<label for="male">Male</label><br>
 		<input type="radio" id="female" name="gender" value="female">
 		<label for="female">Female</label><br>
 		<input type="radio" id="other" name="gender" value="other">
 		<label for="other">Other</label><br><br>

		<label for="nationality">Nationality :</label><br><br>
		<select name="nationality" id="nationality">
			<option value="indonesian">Indonesia</option>
			<option value="malaysia">Malaysia</option>
			<option value="australia">Australia</option>
			<option value="singapore">Singapore</option>
		</select><br><br>

		<label for="language">Language Spoken :</label><br><br>
		<input type="checkbox" id="indo" name="language[]" value="Bahasa Indonesia">
		<label for="indo">Bahasa Indonesia</label><br>
		<input type="checkbox" id="english" name="language[]" value="English">
		<label for="english">English</label><br>
		<input type="checkbox" id="other" name="language[]" value="Other">
		<label for="other">Other</label><br><br>

		<label for="bio">Bio :</label><br><br>
		<textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
		<button type="submit">Sign Up</button>
		
	</form>
</body>
</html>
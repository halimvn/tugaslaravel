

<!DOCTYPE html>
<html>
<head>


	<title>Sabebrcode</title>

	<style type="text/css">
		.space {
			padding-bottom: 20px;
		}
		.spaceform{
			margin-top: 10px;
		}
	</style>
</head>
<body>
<h1>Buat Account Baru</h1>
<h4>Sign Up Form</h4>

<form action="/welcome" method="POST">
@csrf
	<div class="space">
	<label>First Name :  </label><br>
	<input class="spaceform" type="text" name="firstname">
</div>

<div class="space">
	<label>Last Name</label><br>
	<input class="spaceform" type="text" name="lastname">
	</div>

	<div class="space">
		<label>Gender</label><br>
		<input class="spaceform" type="radio" id="male" name="gender" value="male">
		  <label for="male">Male</label><br>
		  <input type="radio" id="female" name="gender" value="female">
		  <label for="female">Female</label><br>
		  <input type="radio" id="other" name="gender" value="other">
		  <label for="other">Other</label>

	</div>

	<div class="space">
		<label class="space">Nationality: </label> <br>
		<select class="spaceform">
			<option value="Indonesia">Indonesia</option>
			<option value="Singaporean">Singaporean</option>
			<option value="Malaysian">Malaysian</option>
			<option value="Australian">Australian</option>
		</select>
	</div>

	<div class="space">
		<label>Language Spoken:</label><br>
		<input class="spaceform" type="radio" id="bahasaindonesia" name="language" value="bahasaindonesia">
		  <label for="bahasaindonesia">Bahasa Indonesia</label><br>
		  <input class="spaceform" type="radio" id="english" name="language" value="english">
		  <label for="english">English</label><br>
		  <input type="radio" id="other" name="language" value="other">
		  <label for="other">Other</label>

	</div>

	<div class="space">
		<label>Bio</label><br>
		<textarea class="spaceform" rows="6">
			
		</textarea>
	</div>

	<div class="space">
		<input type="submit" value="Sign Up">
	</div>
</form>
</body>
</html>
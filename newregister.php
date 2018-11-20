<?php 
include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome Home</title>
</head>
<body>

	<div id="inputContainer">
		
		<form id="loginForm" action="newregister.php" method="POST">
			
			<h2>Login To Your Account</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. ianDavis" 
				required>
			</p>

			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" type="password" placeholder="Your Password" required>
			</p>
			
			<button type="submit" name="loginButton">Login</button>

		</form>



		<form id="registerForm" action="newregister.php" method="POST">
			
			<h2>Create Your Free Account</h2>

			<p>
				<label for="reg_fname">First Name</label>
				<input id="reg_fname" name="reg_fname" type="text" placeholder="e.g. Ian" 
				required>
			</p>

			<p>
				<label for="reg_lname">Last Name</label>
				<input id="reg_lname" name="reg_lname" type="text" placeholder="e.g. Davis" 
				required>
			</p>

			<p>
				<label for="reg_email">Email</label>
				<input id="reg_email" name="reg_email" type="text" placeholder="e.g. johndoe@gmail.com" 
				required>
			</p>

			<p>
				<label for="reg_email2">Confirm Email</label>
				<input id="reg_email2" name="reg_email2" type="text" placeholder="e.g. johndoe@gmail.com" 
				required>
			</p>

			<p>
				<label for="reg_address">Address</label>
				<input id="reg_address" name="reg_address" type="text" placeholder="e.g. 1234 Generic Road" 
				required>
			</p>

			<p>
				<label for="reg_zip">Zip Code</label>
				<input id="reg_zip" name="reg_zip" type="text" placeholder="e.g. 12345" 
				required>
			</p>

			<p>
				<label for="reg_city">City</label>
				<input id="reg_city" name="reg_city" type="text" placeholder="e.g. Boston" 
				required>
			</p>

			<p>
				<label for="reg_phone">Phone Number</label>
				<input id="reg_phone" name="reg_phone" type="tel" placeholder="e.g. 1234567890" 
				required>
			</p>

			<p>
				<label for="reg_state">State</label>
				<select id="reg_state" name="reg_state">
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="DC">District Of Columbia</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="IA">Iowa</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NV">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VT">Vermont</option>
					<option value="VA">Virginia</option>
					<option value="WA">Washington</option>
					<option value="WV">West Virginia</option>
					<option value="WI">Wisconsin</option>
					<option value="WY">Wyoming</option>
				</select>
			</p>

			<p>
				<label for="reg_password">Password</label>
				<input id="reg_password" name="reg_password" type="password" placeholder="Your Password" required>
			</p>
			
			<button type="submit" name="registerButton">Sign Up</button>

		</form>

	</div>

</body>
</html>
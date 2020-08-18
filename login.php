<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body style = "background-color: #4FBCAC;">
	<div class="container form-content">
		<div class = "row">
			<!-- Create the Login Column -->
			<div class = "col-lg-6" style = "background-color: pink; padding: 20px; margin-top: 20px;">
				<h2>Login Form</h2>
				<form action = "validation.php" method = "post">
					<div class = "form-group">
						<label>Username:</label>
						<input type="text" name="user" class = "form-control" placeholder="Your Name">
					</div>

					<div class = "form-group">
						<label>Password:</label>
						<input type="password" name="password" class = "form-control" placeholder="Your Password">
					</div>
					<button type = "submit" class = "btn btn-primary">Login</button>
				</form>
			</div>

			<!-- Create the Sign up Column -->
			<div class = "col-lg-6">
				<h2>Sign Up Form</h2>
				<form action = "registration.php" method = "post">
					<div class = "form-group">
						<label>Username:</label>
						<input type="text" name="user" class = "form-control" placeholder="Your Name">
					</div>

					<!-- <div class = "form-group">
						<label>Email:</label>
						<input type="email" name="email" class = "form-control" placeholder="Your Email">
					</div> -->

					<div class = "form-group">
						<label>Password:</label>
						<input type="password" name="password" class = "form-control" placeholder="Your Password">
					</div>
					<button type = "submit" class = "btn btn-primary">Sign Up</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Welcome</title>
</head>
<body>
<div class="signup-form">
    <form action="register-back.php" method="post" enctype="multipart/form-data">
		<h2>Register</h2>
		<p>Create your account</p>
        <div>
			<div class="row">
				<div class="col"><input type="text" name="first_name" placeholder="First Name" required="required"></div><br>
				<div class="col"><input type="text" name="last_name" placeholder="Last Name" required="required"></div><br>
			</div>        	
        </div>
        <div>
        	<input type="email" name="email" placeholder="Email" required="required">
        </div><br>
		<div class="form-group">
            <input type="password" name="pass" placeholder="Password" required="required">
        </div><br>
		<div class="form-group">
            <input type="password" name="cpass" placeholder="Confirm Password" required="required">
        </div><br>
		<div class="form-group">
            <button type="submit" name="save" >Register Now</button>
        </div><br>
        <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
    </form>
	
</div>
</body>
</html>

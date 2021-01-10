<?php
    session_start();
    if(isset($_POST['save']))
{
    extract($_POST);
    include 'database.php';
    $sql=mysqli_query($conn,"SELECT * FROM register where Email='$email' and Password='md5($pass)'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["ID"] = $row['ID'];
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["First_Name"]=$row['First_Name'];
        $_SESSION["Last_Name"]=$row['Last_Name']; 
        header("Location: homepage.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Welcome</title>
</head>
<body>

<div class="signup-form">
    <form  method="post" enctype="multipart/form-data">
		<h2>Login form</h2>
		<p class="hint-text">Enter Login Details</p>
        <div>
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div><br>
		<div>
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div><br>
		<div>
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Login</button>
        </div><br>
        <div>Don't have an account? <a href="registration.php">Register Here</a></div>
    </form>
</div>
</body>
</html>
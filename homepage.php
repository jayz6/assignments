<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Welcome to my Portal</title>
</head>
<body>
<div class="signup-form">
    <form action="home.php" method="post" enctype="multipart/form-data">
		<h2>Welcome</h2>
        <br>

            <?php
				session_start();
				include 'database.php';
				$ID= $_SESSION["ID"];
				$sql=mysqli_query($conn,"SELECT * FROM register where ID='$ID' ");
				$row  = mysqli_fetch_array($sql);
            ?>
            
		<p><br><b>Welcome </b><?php echo $_SESSION["First_Name"] ?> <?php echo $_SESSION["Last_Name"] ?></p>
        <div>Want to Leave the Page? <br><a href="logout.php">Logout</a></div>
    </form>
	
</div>
</body>
</html>
<?php
	session_start();
	require 'dbconfig/config.php';
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="main-wrapper">
		<center><h2>Home Page</h2></center>
		<center><h3>Welcome <?php echo $_SESSION['username']; ?></h3></center>
		
		<form action="index.php" method="post">
			<div class="imgcontainer">
				<?php
				echo '<img src="'.$_SESSION['imglink'].'" alt="Avatar" class="avatar">';
				  ?>
			</div>
			<div class="inner_container">
				<button class="logout_button" type="submit" name="logout">Log Out</button>	
			</div>
		</form>
		<?php 
		if (isset($_POST['logout'])) {
			session_destroy();
			header('location:index.php');
		}
		?>
	</div>
</body>
</html>
<?php 

	//Allow the config
	define('__CONFIG__',true);
	//require the config
	require_once "inc/config.php"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewpoint" content="width=device-width,intial-scale=1.0">
	<meta name="robots" content="follow">

	<title>Index</title>

	<base href="">

	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/css/uikit.min.css" />

</head>
<body>

	<div class="uk-section uk-container">
		<?php 
			echo "Hello Ravindu! Today is: ";
			echo date("Y m d");
		 ?>
		 <hr>
		 <br>
		 	<a class="uk-button uk-button-primary" href="login.php">Login</a>
		 	<a class="uk-button uk-button-secondary" href="register.php">Register</a>
	</div>

	<?php  

		require_once "inc/footer.php";

	?>
	
</body>
</html>

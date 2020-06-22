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

	<title>Login</title>

	<base href="">

	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/css/uikit.min.css" />

</head>
<body>

	<div class="uk-section uk-container">
		<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>

			<!-- Adding a form from UIKiT | Start-->
			<form class="uk-form-stacked js-login">
				<h2>Login</h2>
    			<div class="uk-margin">
        			<label class="uk-form-label" for="form-stacked-text">Email</label>
        			<div class="uk-form-controls">
            			<input class="uk-input" id="form-stacked-email" type="email" required="required" placeholder="email@email.com">
        			</div>
    			</div>

    			<div class="uk-margin">
        			<label class="uk-form-label" for="form-stacked-text">Password</label>
        			<div class="uk-form-controls">
            			<input class="uk-input" id="form-stacked-password" type="password" required="required" placeholder="Your password">
        			</div>
    			</div>

    			<div class="uk-margin">
        			<button class="uk-button uk-button-default" type="submit">Login</button>
        			<p>Not a member? <a href="register.php">Register!</a></p>
    			</div>
			</form>
			<!-- Adding a form from UIKiT | End-->

		</div>
	</div>

	<?php  

		require_once "inc/footer.php";

	?>
	
</body>
</html>

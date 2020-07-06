<?php 

	//Allow the config
	define('__CONFIG__',true);

	//require the config
	require_once "../inc/config.php"; 

	//POST methods cannot access ajax
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		//always return in json format
		header('Content-Type: application/json');

		//$array = ['test1', 'test2', 'test3', array('name' => 'Ravindu', 'lastname' => 'Madushan') ];

		$return = [];

		/*-------------register the user-------------*/
		//Make sure the user does not exists.

		//Make sure the user can be added and is added.

		//Return the proper information back to Javascript to redirect us.

		//$return['redirect'] = './index.php?this-was-a-redirect';
		$return['redirect'] = './dashboard.php';
		$return['name'] = "Ravindu Madushan";

		echo json_encode($return, JSON_PRETTY_PRINT);
		exit;
	} else {
		exit('test');
	}

	

?>
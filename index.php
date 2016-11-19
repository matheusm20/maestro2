<?php 
	include ('system/system.php');
	require_once ('system/controller.php');
	require_once ('system/model.php');
	require_once ('config.php');
	
	function __autoload($file){
		if(file_exists(MODELS.$file.'.php'))
			require_once (MODELS.$file.'.php');
		else 
			die("Classe não encontrada.");
	}
	
	$obj = new System();
	$obj->run();
	
	var_dump($obj);
?>
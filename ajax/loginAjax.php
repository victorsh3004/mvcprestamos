<?php 
	$peticionAjax=true;
	require_once "../config/APP.php";

	if(){

	}else{
		session_start(['name' => 'SPM']);
		session_unset(); //vaciamos la session
		session_destroy();
		header("Location: ".SERVERURL."login/");
		exit();
	}
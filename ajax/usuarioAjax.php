<?php 
	$peticionAjax=true;
	require_once "../config/APP.php";

	if(isset($_POST['usuario_dni_reg'])){
		
		/*---------------- Instancia al controlador -----------------*/
		require_once "../controladores/usuarioControlador.php";
		$ins_usuario = new usuarioControlador();

		/*---------------- Agregar Usuario -----------------*/
		if (isset($_POST['usuario_dni_reg']) && isset($_POST['usuario_nombre_reg'])) {
			echo $ins_usuario->agregar_usuario_controlador();
		}
	}else{
		session_start(['name' => 'SPM']);//sintaxis de php7
		session_unset(); //vaciamos la session
		session_destroy();
		header("Location: ".SERVERURL."login/");
		exit();
	}
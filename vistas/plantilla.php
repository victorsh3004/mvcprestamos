<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo COMPANY ?></title>

	<?php include "./vistas/inc/link.php";?>


</head>
<body>
	<?php 
		$peticionAjax=false;
		require_once "./controladores/vistasControlador.php";
		$IV = new vistasControlador();

		$vistas=$IV->obtener_vistas_controlador();
		if ($vistas=="login" || $vistas=="404") {
			require_once "./vistas/contenidos/".$vistas."-view.php";
		}else{
			//print_r("hola ".$vistas);
			session_start(['name' => 'SPM']);
			require_once "./controladores/loginControlador.php";
			$lc = new loginControlador();

			if(!isset($_SESSION['token_spm']) || !isset($_SESSION['usuario_spm']) || !isset($_SESSION['privilegio_spm']) || !isset($_SESSION['id_spm'])){
				echo $lc->forzar_cierre_sesion_controlador();
				exit();
			}
	?>
	
		<!-- Main container -->
		<main class="full-box main-container">
			<!-- Nav lateral -->
			<?php include "./vistas/inc/navLateral.php";?>

			<!-- Page content -->
			<section class="full-box page-content">
				
			<?php 
				include "./vistas/inc/navBar.php";
				include $vistas;
			?>
				
			</section>
		</main>
		<?php 
			include "./vistas/inc/LogOut.php";
		}
	include "./vistas/inc/script.php";?>
</body>
</html>
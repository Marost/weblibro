<?php
$error = $_REQUEST["error"];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Formulario</title>
	<link href="css/font.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<link href="css/form.css?update" rel="stylesheet" type="text/css" />
	<style type="text/css">
		body{
			text-align: center;
			background-color: #fff;
		}
		h3 {
		    font-size: 24px;
		    font-family: 'Gotham A', 'Gotham B';
		    margin: 0;
		}
	</style>
</head>
<body>

	<div class="content">

		<div class="contenido">
			
			<?php if($error=="si"){ ?>	

			<h3>No se pudo realizar tu pedido con éxito. Realizo de nuevo mas tarde.</h3>

			<?php }elseif($error=="no"){
				$pedido = $_REQUEST["pedido"];
			?>
			<h3>Gracias por tu compra.</h3>
			<br><br>
			<h3>No olvides enviar el boucher al correo <br>
			<a href="mailto:ventas@g7consultores.com">ventas@g7consultores.com</a> <br>
			indicando tu número de pedido en el asunto.</h3>
			<br><br>
			<h3>N° de pedido: <?php echo $pedido; ?></h3>

			<?php } ?>

		</div>

	</div>

</body>
</html>


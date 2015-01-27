<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Formulario</title>
	<link href="css/font.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<link href="css/form.css?up" rel="stylesheet" type="text/css" />
	<script type="text/javascript">var submitted=false;</script>
</head>
<body>

	<div class="content">

		<p class="info">Pagos contra entrega en el área del Centro Histórico de Lima sin recargo.</p>

		<h1>Deposito Bancario</h1>

		<div class="contenido">
			
			<form action="compra.php" method="POST">

				<div class="item">
					
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" id="nombre" required>

				</div>
				
				<div class="item">
					
					<label for="email">Email</label>
					<input type="text" name="email" id="email" required>

				</div>

				<div class="item">
					
					<label for="direccion">Dirección de envío</label>
					<input type="text" name="direccion" id="direccion" required>

				</div>

				<div class="item">
					
					<label for="referencia">Referencia</label>
					<textarea name="referencia" id="" cols="30" rows="10"></textarea>

				</div>

				<div class="item-texto">
					<p class="cuenta"><span class="info">Enviar la copia del voucher</span> e indicar el Nº Operación, <br> Fecha , Banco y Nº Pedido al correo: ventas@g7consultores.com</p>
 
					<p>Su pedido será programado para envío una vez que le respondamos el <br> correo y se confirme el depósito dentro de las 24 horas.</p>

					<p class="cuenta">SCOTIABANK Cuenta corriente en soles 000-2651831</p>
					<p class="cuentai">Código de Cuenta Interbancario: 009-010-000002651831-06</p>
					<p class="cuenta">SCOTIABANK Cuenta corriente en dólares 000-4548309</p>
					<p class="cuentai">Código de Cuenta Interbancario: 009-010-000004548309-06</p>

					<p>En caso de no recibir nuestra confirmación <br> sirvase comunicarse con nosotros al 789-4109</p>

					<p>Su pedido llegará en un maximo de 72 horas</p>
				</div>

				<div class="item boton">
					<input type="submit" name="comprar" id="comprar" value="">
					<input type="hidden" value="<?php echo $pedido; ?>">
				</div>

			</form>

		</div>

	</div>
	
</body>
</html>
<?php
session_start(); 

$conexion=mysql_connect("localhost","","") or die("no se puede conectar");
mysql_select_db("", $conexion) or die("no se puede seleccionar la BD");

//$conexion=mysql_connect("localhost","root","") or die("no se puede conectar");
//mysql_select_db("libro", $conexion) or die("no se puede seleccionar la BD");

require_once('inc/funciones.php');

//VARIABLES
$nombre = strip_tags(trim($_POST["nombre"]));	
$email = strip_tags(trim($_POST["email"]));
$direccion = strip_tags(trim($_POST["direccion"]));
$referencia = strip_tags(trim($_POST["referencia"]));
$codigo = codigoAleatorio(8, false, true, false);

//INSERTANDO DATOS
$rst_guardar=mysql_query("INSERT INTO compra (nombre, email, direccion, referencia, codigo) VALUES('$nombre', '$email', '$direccion', '$referencia', '$codigo')", $conexion);

$buscar = mysql_query("SELECT * FROM compra WHERE codigo='$codigo'", $conexion);
$buscar_num = mysql_num_rows($buscar);

if($buscar_num<>0){

	//DATOS
	$busca_q = mysql_fetch_array($buscar);
	$pedido = "0".$busca_q["id"];

	// Enter your name or company name below
	$receiver_name = "Ventas";

	// Enter email address below for receiving the form
	// All Contact messages will be sent there
	$receiver_email = "ventas@g7consultores.com";

	// Enter email subject below
	// This will be your message subject
	$msg_subject = "Compra: ".$pedido;

	require "inc/email/PHPMailerAutoload.php";
	require "inc/email/smartmessage.php";
		
	$mail = new PHPMailer();
	$mail->isSendmail();
	$mail->IsHTML(true);
	$mail->From = $email;
	$mail->CharSet = "UTF-8";
	$mail->FromName = $nombre;
	$mail->Encoding = "base64";
	$mail->Timeout = 200;
	$mail->ContentType = "text/html";
	$mail->addAddress($receiver_email, $receiver_name);
	$mail->addAddress($email, $nombre);
	$mail->Subject = $msg_subject;	
	$mail->Body = $message;
	$mail->AltBody = "Use an HTML compatible email client";

	if($mail->Send()) {
		header("Location:respuesta.php?error=no&pedido=".$pedido);
	}
}else{
	header("Location:respuesta.php?error=si");
}
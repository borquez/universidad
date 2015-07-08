<html>
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Diego's web</title>
	</head>
	<body bgcolor="orange">
		<!--centrar el texto-->
		<div align=center>
		<u><strong><h1>"lA PAGINA DE DIEGO BORQUEZ "</h1></strong></u>
		<hr>
<?php 
session_start();
if(isset($_POST['Ingresar'])){
$ramo=$_POST['Ramo'];
$profesor=$_POST['Profesor'];
$prueba=$_POST['Prueba'];
$universidad=$_POST['Universidad'];
$facultad=$_POST['Facultad'];
$_SESSION['Ramo']=$ramo;
$_SESSION['Profesor']=$profesor;
$_SESSION['Prueba']=$prueba;
$_SESSION['Universidad']=$universidad;
$_SESSION['Facultad']=$facultad;
header('location: lista.php');
    }
    
?>
 
	
	</body>
</html>
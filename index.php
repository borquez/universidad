
<html>
	<head>
		<?php
		session_start();
		?>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Diego's web</title>
	</head>
	<body bgcolor="orange">
		<!--centrar el texto-->
		<div align=center>
		<u><strong><h1>"lA PAGINA DE DIEGO BORQUEZ "</h1></strong></u>
		
		<hr>
		<form method="POST" action="lista.php" >
		<table>
		<tr>
		
		</tr>
  		<tr>
    <td><input type="text" name="Ramo" value="Ramo" /> <br/>	</td>
    <td><input type="text" name="Profesor" value=" Nombre de profesor" /> <br/></td>
    <td><input type="text" name="Prueba" value=" Prueba" /> <br/></td>
    <td><input type="text" name="Universidad" value=" Universidad" /> <br/></td>
    <td><input type="text" name="Facultad" value=" Facultad" /> <br/></td>
    <td><input type="submit" value="Ingresar" /></td>
  		</tr>
  		<tr>
  		
		</table>
		 
		
		</form>
		<form method="POST" action="subir.php">
		<input type="submit" value="subir">
		</form>
<?php
include_once 'config.inc.php';
$db= new Connect_Mysql()
$ramo=$_POST['Ramo']
$profesor=$_POST['Profesor']
$prueba=$_POST['Prueba']
$universidad=$_POST['Universidad']
$facultad=$_POST['Facultad']

?>

			
	
	</body>
</html>
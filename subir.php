
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
		<a href="index.php"><u><strong><h1>"La página de diego borquez "</h1></strong></u></a>
	
		<hr>
		<form method="POST" action="subir.php" >
		<table>
		<tr>
		<td>
		<h5>¿Que quieres subir?</h5>
		</td>
		<td>
		<select name="menu">
  		<option selected="selected" value="prueba">Prueba</option>
  		<option value="pauta">Pauta</option>
		</select>
		</td>
		</tr>
  		<tr>
    <td><input type="text" name="Ramo" value="Ramo" /> 	</td>
    <td><input type="text" name="Profesor" value=" Nombre de profesor" /> <br/></td>
    <td><input type="text" name="Prueba" value=" Prueba" /> <br/></td>
    <td><input type="text" name="Universidad" value=" Universidad" /> <br/></td>
    <td><input type="text" name="Facultad" value=" Facultad" /> <br/></td>
    
  		</tr>
  		<tr>
  		<td><input type="file" name="seleciona el archivo"></td>
  		<td><input type="submit" value="subir" name='subir' /></td>
  		</tr>
		</table>
		</form>
		
		
<?php
include_once 'config.inc.php';

if(isset($_POST['subir'])){;
echo 'done';
$db= new Connect_Mysql();
$ramo=$_POST['Ramo'];
$profesor=$_POST['Profesor'];
$prueba=$_POST['Prueba'];
$universidad=$_POST['Universidad'];
$facultad=$_POST['Facultad'];
$link = mysql_connect('localhost', 'root', '');
$db_selected = mysql_select_db('apoyouniversitario',$link);
$register = mysql_query("INSERT INTO Apoyo VALUES('$profesor','$ramo','1','$universidad','$facultad','1')");
echo 'done';
}



?>
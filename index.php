
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
		<form method="POST" action="index.php" >
		<table>
		<tr>
		<td><h4>Ramo</h4></td>
		<td><h4>Profesor</h4></td>
		<td><h4>Prueba</h4></td>
		<td><h4>Universidad</h4></td>
		<td><h4>Facultad</h4></td>
		</tr>
  		<tr>
 

<?php 
  /*Conexion a la bd*/
$link = mysql_connect('localhost', 'root', '');
$db_selected = mysql_select_db('apoyouniversitario',$link);
$dat="SELECT DISTINCT Ramo FROM Apoyo";
$sql=mysql_query($dat);
 ?>

<td><select name="Ramo">
<option selected="selected" value="vacio"></option>
 <?php
 while($lista=mysql_fetch_array($sql))
   echo "<option  value='".$lista["Ramo"]."'>".$lista["Ramo"]."</option>"; 
?>
</select></td>
<?php 
  /*Conexion a la bd*/
$link = mysql_connect('localhost', 'root', '');
$db_selected = mysql_select_db('apoyouniversitario',$link);
$dat="SELECT DISTINCT Profesor FROM Apoyo";
$sql=mysql_query($dat);
 ?>
<td><select name="Profesor">
<option selected="selected" value="vacio"></option>
 <?php
 while($lista1=mysql_fetch_array($sql))
   echo "<option  value='".$lista1["Profesor"]."'>".$lista1["Profesor"]."</option>"; 
?>
</select></td>
<?php 
  /*Conexion a la bd*/
$link = mysql_connect('localhost', 'root', '');
$db_selected = mysql_select_db('apoyouniversitario',$link);
$dat="SELECT DISTINCT Prueba FROM Apoyo";
$sql=mysql_query($dat);
 ?>
<td><select name="Prueba">
<option selected="selected" value="vacio"></option>
 <?php
 while($lista=mysql_fetch_array($sql))
   echo "<option  value='".$lista["Prueba"]."'>".$lista["Prueba"]."</option>"; 
?>
</select></td>
<?php 
  /*Conexion a la bd*/
$link = mysql_connect('localhost', 'root', '');
$db_selected = mysql_select_db('apoyouniversitario',$link);
$dat="SELECT DISTINCT Universidad FROM Apoyo";
$sql=mysql_query($dat);
 ?>
<td><select name="Universidad">
<option selected="selected" value="vacio"></option>
 <?php
 while($lista=mysql_fetch_array($sql))
   echo "<option  value='".$lista["Universidad"]."'>".$lista["Universidad"]."</option>"; 
?>
</select></td>
<?php 
  /*Conexion a la bd*/
$link = mysql_connect('localhost', 'root', '');
$db_selected = mysql_select_db('apoyouniversitario',$link);
$dat="SELECT DISTINCT Facultad FROM Apoyo";
$sql=mysql_query($dat);
 ?>
<td><select name="Facultad">
<option selected="selected" value="vacio"></option>
<option selected="selected" value="vacio"></option>
 <?php
 while($lista=mysql_fetch_array($sql))
   echo "<option  value='".$lista["Facultad"]."'>".$lista["Facultad"]."</option>"; 
?>
</select></td>
    <!---<td><input type="text" name="Profesor" placeholder=" Nombre de profesor" /> <br/></td>
    <td><input type="text" name="Prueba" placeholder=" Prueba" /> <br/></td>
    <td><input type="text" name="Universidad" placeholder=" Universidad" /> <br/></td>
    <td><input type="text" name="Facultad" placeholder=" Facultad" /> <br/></td>-->
    <td><input type="submit" value="Ingresar" name='Ingresar' /></td>
  		</tr>
  				
		</table>		 		
		</form>
		<form method="POST" action="subir.php">
		<input type="submit" value="subir">
		</form>			
	</body>
</html>
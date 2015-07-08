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
$ramo=$_SESSION['Ramo'];
$profesor=$_SESSION['Profesor'];
$prueba=$_SESSION['Prueba'];
$universidad=$_SESSION['Universidad'];
$facultad=$_SESSION['Facultad'];
if($ramo!= '' and $profesor != '' and $prueba != '' and $universidad!='' and $facultad!=''){
$link = mysql_connect('localhost', 'root', '');
$db_selected = mysql_select_db('apoyouniversitario',$link);
$query = "SELECT Ramo,Profesor,Prueba,Universidad, Facultad,Prueba " .
      "FROM Apoyo " .
	  "WHERE Ramo = '$ramo' and Profesor = '$profesor' and Prueba = '$prueba' and Universidad= '$universidad' and Facultad = '$facultad'";
$result = mysql_query($query); 
while($row = mysql_fetch_array($result))
  {
  ?>
  <tr>
  <?php
    echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
	    $row["Ramo"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["Profesor"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["Universidad"] . "</font></td>";
	echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["Prueba"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["Facultad"]. "</font></td></tr>";    
    ?>
    </tr>
    <?php
   
  }
}
if($profesor==''){
$link = mysql_connect('localhost', 'root', '');
$db_selected = mysql_select_db('apoyouniversitario',$link);
$query = "SELECT Ramo,Profesor,Prueba,Universidad, Facultad,Prueba " .
      "FROM Apoyo " .
	  "WHERE Ramo = '$ramo' and Prueba = '$prueba' and Universidad= '$universidad' and Facultad = '$facultad'";
$result = mysql_query($query); 
while($row = mysql_fetch_array($result))
  {
    echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
	    $row["Ramo"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["Profesor"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["Universidad"] . "</font></td>";
	echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["Prueba"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["Facultad"]. "</font></td></tr>";    
    
  }
}

    
    
?>
 
	
	</body>
</html>
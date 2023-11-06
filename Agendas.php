<!DOCTYPE html>
<html lang = "en">
<head>
     <title>Crear Agendas</title>
</head>
<body>

<h2>Crear Agendas:</h2>

 <form action = "ProcesoFin.php" method = "POST">
 
   <label for="id_proceso">ID Proceso:</label>
    <input type="text" id="id_proceso" name="id_proceso"><br>

    <label for="fecha_inicial">Fecha de Inicio:</label>
    <input type="text" id="fecha_inicial" name="fecha_inicial"><br>
	
	<label for="fecha_final">Fecha Fin:</label>
    <input type="text" id="fecha_final" name="fecha_inicial"><br>
	
	<h2>Candidatos:</h2>
	
    <label for="id_tipo_documento">ID Prueba:</label>
    <input type="text" id="id_tipo_documento" name="id_tipo_documento" ><br>
	
	<label for="documento"> Documento:</label>
    <input type="text" id="documento" name="documento"><br>
	
	<label for="email">Correo Electronico:</label>
    <input type="text" id="email" name="email"><br>
	
	
    <?php 

    if (isset ($_GET['error1'])){
    	//echo "Entro1";
    	$error1 =  $_GET['error1'];
        if ($error1 == "Incorrecto"){
    		echo "<h2> Usuario o constraseña no son correctos</h2>";
    	} if ($error1 == "Vacio"){
    		echo "<h2> Los Datos estan vacios</h2>";
    		echo "Entro2";
    	}
    	
    }
    ?>


    <input name="submit" type="submit" value="enviar">
	
 </form>
</body>

</html>


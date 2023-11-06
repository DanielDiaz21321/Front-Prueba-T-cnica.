<!DOCTYPE html>
<html lang = "en">
<head>
     <title>Crear Procesos</title>
</head>
<body>

<h2>Crear Procesos:</h2>

 <form action = "FinProceso1.php" method = "POST">
   <label for="proceso_nombre">Nombre del proceso:</label>
    <input type="text" id="proceso_nombre" name="proceso_nombre"><br>

    <label for="fecha_cierre">Fecha de cierre:</label>
    <input type="text" id="fecha_cierre" name="fecha_cierre"><br>
	
	<label for="numerovacantes">Numero de Vacantes:</label>
    <input type="text" id="numerovacantes" name="numerovacantes"><br>
	
    <input type="checkbox" name="proceso_estado" id="proceso_estado">
    <label for="proceso_estado">Estado del Proceso.</label><br>
	
	<input type="checkbox" name="verificacion_identidad" id="verificacion_identidad">
    <label for="verificacion_identidad">Verificación de identidad.</label><br>


    <label for="id_prueba">ID Prueba:</label>
    <input type="text" id="id_prueba" name="id_prueba"><br>
	
	<label for="id_perfil">ID Perfil:</label>
    <input type="text" id="id_perfil" name="id_perfil"><br>

 	<label for="valor_porcentual">Valor Porcentual:</label>
    <input type="text" id="valor_porcentual" name="valor_porcentual"><br>
	
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

    <input name="submit" type="submit" value="Validar">
	
 </form>
</body>

</html>
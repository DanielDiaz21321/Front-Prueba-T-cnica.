<!DOCTYPE html>
<html lang = "en">
<head>
     <title>Iniciar Sesión</title>
</head>
	<?php 

    if (isset ($_GET['error'])){
    	//echo "Entro1";
    	$error =  $_GET['error'];
        if ($error == "Incorrecto"){
    		echo "<h2> Usuario o constraseña no son correctos</h2>";
    	} if ($error == "Vacio"){
    		echo "<h2> Los Datos estan vacios</h2>";
    		echo "Entro2";
    	}
    	
    }
    ?>
<body>

<h2>Iniciar Sesión</h2>

 <form action = "FinProceso.php" method = "POST">
   <label for="username">Usuario:</label>
    <input type="text" id="username" name="username"><br>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password"><br>
	


    <input name="submit" type="submit" value="Iniciar Sesión">
	
 </form>
</body>

</html>
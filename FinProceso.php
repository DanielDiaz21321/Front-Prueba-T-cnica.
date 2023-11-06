<?php
$error;

// Se puede usar !empty que pregunta si esta vacia la variable que enviamos 
//o isset que  se utiliza para comprobar si una variable está definida y si tiene un valor distinto de null.
// Devuelve true si la variable existe y tiene un valor, y false si la variable no está definida o su valor es null. 
if(!empty($_POST["username"]) && !empty($_POST["password"])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	

	if ($username == "Daniel.Diaz" && $password == "Daniel123"){
		$error = "Ok";
		echo "<h2>Accedió</h2>";
		echo "<p>Bienvenido usuario ".$username.".</p>";
		
				
	}else{
		$error = "Incorrecto";
		header("Location: index.php?error=$error");
		
	}

	
} else {
	$error = "Vacio";
	// ? lo que paso por pareametro
	header("Location: index.php?error=$error");
	
}

?>
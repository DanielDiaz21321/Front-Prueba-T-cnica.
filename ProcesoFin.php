<?php
$error;

// Se puede usar !empty que pregunta si esta vacia la variable que enviamos 
//o isset que  se utiliza para comprobar si una variable está definida y si tiene un valor distinto de null.
// Devuelve true si la variable existe y tiene un valor, y false si la variable no está definida o su valor es null. 
if(!empty($_POST["id_tipo_documento"]) && !empty($_POST["documento"]) && !empty($_POST["email"])) {
	$id_tipo_documento = $_POST['id_tipo_documento'];
	$documento = $_POST['documento'];
	$email = $_POST['email'];
	
	if ($id_tipo_documento == "1" && $documento == "1192811" && $email == "prueba123@gamil.com"){
		$error = "Ok";
		echo "<h2>Datos Enviados</h2>";
		echo "<p>El Tipo de Documento enviado es: ".$id_tipo_documento."."."</p>";
		echo "<p>El Numero de Documento enviado es: ".$documento."."."</p>";
		echo "<p>El Email enviado es: ".$email."."."</p>";
		
				
	}else{
		$error = "Incorrecto";
		header("Location: Agendas.php?error=$error");
		
	}

	
} else {
	$error = "Vacio";
	// ? lo que paso por pareametro
	header("Location: Agendas.php? =$error");
}

?>
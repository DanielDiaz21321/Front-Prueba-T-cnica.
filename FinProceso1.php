<?php

$error1;
if (!empty($_POST["id_prueba"]) && !empty($_POST["id_perfil"]) && !empty($_POST["valor_porcentual"])) {
	$error1 = "Ok";
    $id_prueba = $_POST['id_prueba'];
    $id_perfil = $_POST['id_perfil'];
    $valor_porcentual = $_POST['valor_porcentual'];
    
    // Definir un array de credenciales válidas
    $credencialesValidas = [
        "1" => [
            "perfil" => "18",
            "percentual" => "50"
        ],
        "2" => [
            "perfil" => "16",
            "percentual" => "50"
        ]
        // Agrega más usuarios y contraseñas si es necesario
    ];
    
    if (array_key_exists($id_prueba, $credencialesValidas) &&
        $credencialesValidas[$id_prueba]["perfil"] === $id_perfil &&
        $credencialesValidas[$id_prueba]["percentual"] === $valor_porcentual) {
        // Inicio de sesión exitoso
		echo "<h2>Ingreso exitoso.</h2>";
        echo "<p>El ID de prueba ingresado es: ".$id_prueba."."."</p>";
		echo "<p>El ID de Perfil ingresado es: ".$id_perfil."."."</p>";
		echo "<p>El Valor Porcentual ingresado es: ".$valor_porcentual."."."</p>";
    } else {
        // Credenciales incorrectas
        echo "Credenciales incorrectas. Por favor, inténtalo de nuevo.<br>";
		$error1 = "Incorrecto";
		header("Location: Procesar.php?error1=$error1");
    }
} else {
	$error1 = "Vacio";
	// ? lo que paso por pareametro
	header("Location: Procesar.php?error1=$error1");
}

?>

<?php

include('con_db.php');

// if ($conexion) {
//     echo ('todo bien');
// }

// $longitud = $_POST['latitude'];
// echo json_encode($longitud);


//El valor del envio es verdadero?
if (isset($_POST['send'])) {

    //Traeme lo que esta almacenado con este nombre
    if (strlen($_POST['name']) >= 1 && strlen($_POST['lastName']) >= 1 && strlen($_POST['document']) >= 1 && strlen($_POST['identifyNumber']) >= 1) {
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $document = $_POST['document'];
        $identifyNumber = $_POST['identifyNumber'];

        $longitud = $_COOKIE['longitud'];
        $latitud = $_COOKIE['latitud'];

        //Sentencia de insertar datos en la base de datos
        $sentence = "INSERT INTO users(nombre, apellido, documento, numeroDocumento, latitud, longitud) VALUES ('$name','$lastName','$document','$identifyNumber', '$latitud', '$longitud')";
        
        //Realizar consultas a la base de datos
        $resultado = mysqli_query($conexion, $sentence);


        // if ($resultado) {
        //     echo ('<h3 class="text-primary">Inscripción correcta!</h3>');
        // } else {
        //     echo ('<h3 class="text-danger">Hubo un error!</h3>');
        // }
    } else {
        echo ('<h3 class="text-dark">Ingresa todos los campos</h3>');
    }
}


?>
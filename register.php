<?php

include('con_db.php');

if ($conexion) {
    echo ('todo bien');
}

// $longitud = $_POST['latitude'];
// echo json_encode($longitud);

if (isset($_POST['send'])) {


    if (strlen($_POST['name']) >= 1 && strlen($_POST['lastName']) >= 1 && strlen($_POST['document']) >= 1 && strlen($_POST['identifyNumber']) >= 1) {
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $document = $_POST['document'];
        $identifyNumber = $_POST['identifyNumber'];

        $longitud = $_COOKIE['longitud'];
        $latitud = $_COOKIE['latitud'];


        // echo ('<h3 class="text-dark">' . $longitud . '</h3>');


        $sentence = "INSERT INTO users(nombre, apellido, documento, numeroDocumento, latitud, longitud) VALUES ('$name','$lastName','$document','$identifyNumber', '$latitud', '$longitud')";

        $resultado = mysqli_query($conexion, $sentence);


        if ($resultado) {
            echo ('<h3 class="text-primary">Inscripción correcta!</h3>');
        } else {
            echo ('<h3 class="text-danger">Hubo un error!</h3>');
        }
    } else {
        echo ('<h3 class="text-dark">Ingresa todos los campos</h3>');
    }
}


?>
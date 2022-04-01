<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TN - Colombia</title>


    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!--Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>

</head>

<body>

    <head>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Pricing</a>
                        <a class="nav-link disabled">Disabled</a>
                    </div>
                </div>
            </div>
        </nav>
    </head>

    <main class="align-self-center">

        <div class="d-flex container justify-content-center">
            <div class="d-none d-md-block col-6 col-lg-5 col-xl-4 p-4">
                <img class="w-100" src="./img/lamparas2.png" alt="Paisaje de Fondo">
            </div>

            <!-- Form data-->
            <div class="col col-lg-6 col-xl-5 p-4">
                <form method="post" action="tabla.php" class="needs-validation" novalidate>

                    <div class="row g-3">
                        <div class="">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre" pattern="[a-zA-ZÀ-ÿ ]{3,100}" required>
                            <div class="invalid-feedback">
                                <p class="">Recuerde no ingresar números, simbolos o espacios.</p>
                            </div>
                        </div>

                        <div class="">
                            <label for="lastName" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Ingrese su Apellido" pattern="[a-zA-ZÀ-ÿ ]{3,100}" required>
                            <div class="invalid-feedback">
                                <p class="">Recuerde no ingresar números, simbolos o espacios.</p>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <label for="document">Tipo de documento</label>
                            <select class="form-select" name="document" id="document" required>
                                <option value="" disabled selected>Tipo de documento</option>
                                <option value="1">C.C</option>
                                <option value="2">Tarjeta de identidad</option>
                                <option value="3">Otro</option>
                            </select>
                        </div>

                        <div class="col-xl-6">
                            <label for="identifyNumber">Número de documento</label>
                            <input type="text" class="form-control" id="identifyNumber" name="identifyNumber" placeholder="100000009" pattern="[0-9]{6,20}" autocomplete="off" required>

                            <div class="invalid-feedback">
                                <p class="">Recuerde no utilizar letras [a-z] ni simbolos o espacios.</p>
                            </div>
                        </div>

                        <div class="">
                            <input class="form-check-input" type="checkbox" value="1" id="permit" required>
                            <label class="form-check-label" for="permit">
                                Acepto terminos y condiciones.
                            </label>
                            <div class="invalid-feedback">
                                <p class="">Debe aceptar los Terminos y condiciones para poder continuar.</p>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <button class="btn btn-success" type="submit" onclick="btnSubmit()" name="send"> Enviar </button>
                        </div>

                        <div id="resultado">

                    </div>
                    </div>

                </form>
            </div>
            <!-- End Form data-->
        </div>

    </main>


    <footer class="bg-dark">
        <p class="m-0 text-center text-white">Desarrollado con <i class="far fa-heart text-danger"></i> por <a href="">Shelcy Calderón</a></p>
    </footer>

    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="archivo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        (function() {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    
    <!-- API -->
    <!-- AIzaSyB3p3Y3dd-QbGZSNjOllKfbTXGxPfV1qew -->

    <?php
        include('register.php');
    ?> 
    

</body>

</html>
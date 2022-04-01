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

    <link rel="stylesheet" href="https://openlayers.org/en/v6.5.0/css/ol.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.1.1/build/ol.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <head>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Prueba</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Indice 1</a>
                        <a class="nav-link" href="#">Indice 2</a>
                        <a class="nav-link" href="#">Indice 3</a>
                        <a class="nav-link disabled">Indice 4</a>
                    </div>
                </div>
            </div>
        </nav>
    </head>

    <div class="container">
        <h1 class="text-center my-3">Resultados</h1>
        <div class="">
            <table class="table text-center table-responsive table-sm">
                <thead>
                    <tr>
                        <th>Indice</td>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Mapa</th>
                    </tr>
                </thead>

                <?php
                include('register.php');
                // include('con_db.php');
                $sql = "SELECT * from users";
                $result = mysqli_query($conexion, $sql);
                ?>


                <tbody>
                    <?php
                    // Mientras hallan datos en la base de datos , raelos
                    while ($show = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $show['id'] ?></td>
                            <td><?php echo $show['numeroDocumento'] ?></td>
                            <td><?php echo $show['nombre'] ?></td>
                            <td><?php echo $show['apellido'] ?></td>

                            <td class="mapContainer">
                                <div id="map<?php echo $show['id'] ?>" class="map" data-longitud="<?php echo $show['longitud'] ?>" data-latitud="<?php echo $show['latitud'] ?>">
                                </div>

                            </td>

                        </tr>

                    <?php
                    }
                    ?>
                </tbody>


            </table>
        </div>
    </div>





    <footer class="bg-dark">
        <p class="m-0 text-center text-white">Desarrollado con <i class="far fa-heart text-danger"></i> por <a href="https://www.linkedin.com/in/shelcy-calderon-6a7177202/">Shelcy Calderón</a></p>
    </footer>
    <script>

        //OpenLayers Maps
        const divs = document.getElementsByClassName('map');

        for (let i = 0; i < divs.length; i++) {
            let latitud = divs[i].getAttribute('data-latitud');
            let longitud = divs[i].getAttribute('data-longitud');
            let ide = divs[i].getAttribute('id');

            const iconFeature = new ol.Feature({
                geometry: new ol.geom.Point(ol.proj.fromLonLat(([longitud, latitud]))),
                name: 'Somewhere near Nottingham',
            });

            var map = 'map' + divs[i];
            map = new ol.Map({
                target: ide,
                layers: [
                    new ol.layer.Tile({
                        source: new ol.source.OSM(),
                    }),
                    new ol.layer.Vector({
                        source: new ol.source.Vector({
                            features: [iconFeature]
                        }),
                        style: new ol.style.Style({
                            image: new ol.style.Icon({
                                anchor: [0.5, 46],
                                anchorXUnits: 'fraction',
                                anchorYUnits: 'pixels',
                                src: 'https://openlayers.org/en/latest/examples/data/icon.png'
                            })
                        })
                    })
                ],
                view: new ol.View({
                    center: ol.proj.fromLonLat(([longitud, latitud])),
                    zoom: 18
                })
            });
        }
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3p3Y3dd-QbGZSNjOllKfbTXGxPfV1qew&callback=initMap&v=weekly" async></script> -->
</body>

</html>
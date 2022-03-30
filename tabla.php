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









































    <!-- <?php
            include('register.php');
            ?> -->
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Indice</td>
                    <td>Documento</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                </tr>
            </thead>

            <?php
            $sql = "SELECT * from users";
            $result = mysqli_query($conexion, $sql);
            ?>

            <tbody>
                <?php
                while ($show = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $show['id'] ?></td>
                        <td><?php echo $show['numeroDocumento'] ?></td>
                        <td><?php echo $show['nombre'] ?></td>
                        <td><?php echo $show['apellido'] ?></td>

                    </tr>

                <?php
                }
                ?>
            </tbody>

        </table>

    </div>
<script
      src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&v=weekly"
      async
    ></script>
</body>

</html>
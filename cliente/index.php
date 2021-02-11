<?php
    include('lectura.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Multicines</title>
</head>
<body>
    <div class="container">
    <h3 class="text-center">Multicines Catálogo</h3>
    <div class="row">
    <?php foreach($peliculas_desde_ucm as $pelicula): ?>
        <div class="col-4">
            <div class="card text-white bg-info mb-3"> 
                <div class="card-body">
                    <h5 class="card-title"><?php echo $pelicula['id'] . ' ' . $pelicula['titulo']; ?></h5>
                    <p class="card-text">Género: <?php echo $pelicula['genero']; ?></p>
                    <p class="card-text">Idioma: <?php echo $pelicula['idioma']; ?></p>
                    <p class="card-text">Duración: <?php echo $pelicula['duracion']; ?></p>
                    <p class="card-text">Calificación: <?php echo $pelicula['calificacion']; ?></p>
                    <p class="card-text">Resumen: <?php echo $pelicula['resumen']; ?></p>
                    <p class="card-text">Año: <?php echo $pelicula['anioProducto']; ?></p>
                    <p class="card-text">Formato: <?php echo $pelicula['formato']; ?></p>
                    <p class="card-text">Director: <?php echo $pelicula['director']; ?></p>
                    <p class="card-text">Clasificación: <?php echo $pelicula['clasificacion']; ?></p>
                    <p class="card-text">Imagen: <?php echo $pelicula['imagen']; ?></p>
                </div>
            </div>      
        </div> 
    <?php endforeach ?>
    </div>
    <a class="btn btn-primary" href="guardar.php">GUARDAR</a>    
    </div>
</body>
</html>






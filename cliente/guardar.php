<?php

    include_once('connection.php'); 
    include('lectura.php');

    $sql = "INSERT INTO Peliculas (titulo, genero, idioma, duracion, calificacion, resumen, anio_produccion, formato, director, clasificacion, imagen) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt= $pdo->prepare($sql);
    foreach($peliculas_desde_ucm as $pelicula){
        if($stmt->execute([$pelicula['titulo'], $pelicula['genero'], $pelicula['idioma'], $pelicula['duracion'], $pelicula['calificacion'], $pelicula['resumen'], $pelicula['anioProducto'], $pelicula['formato'], $pelicula['director'], $pelicula['clasificacion'], $pelicula['imagen']])){
            echo 'Guardado!';
        }else{
            echo $stmt->errorCode(); 
        }
         
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Multicines</title>
</head>
<body>
    <a href="index.php">Regresar</a>
</body>
</html>
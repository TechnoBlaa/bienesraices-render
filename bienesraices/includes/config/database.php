<?php

function conectarDB() {
    $db = mysqli_connect(
        'mysql.railway.internal', // Host
        'root',                   // Usuario
        'jGuLRRKWWyhBHBAyliJzPgdkjIxgtLbr', // Contraseña
        'railway'                 // Nombre de la base de datos
    );

    if (!$db) {
        echo "Error en la conexión a la base de datos";
        exit;
    }

    return $db;
}

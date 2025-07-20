<?php
function conectarDB() {
    $db = mysqli_connect(
        'mainline.proxy.rlwy.net',
        'root',
        'jGuLRRKWWyhBHBAyliJzPgdkjIxgtLbr',
        'railway',
        12907
    );

    if (!$db) {
        echo "Error en la conexión";
        exit;
    }

    return $db;
}

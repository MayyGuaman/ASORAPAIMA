<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $datos = "Nombre: $nombre\nTeléfono: $telefono\nEmail: $email\nMensaje: $mensaje\n";

    // Abre el archivo para escritura, crea uno si no existe
    $archivo = fopen("respuestas.txt", "a");

    // Escribe los datos en el archivo
    fwrite($archivo, $datos);

    // Cierra el archivo
    fclose($archivo);
}
?>

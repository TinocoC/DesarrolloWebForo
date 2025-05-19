<?php

include('db.php');

if (isset($_POST['save_edificio'])) {
  $nombre = $_POST['nombre'];
  $direccion = $_POST['direccion'];
  $ciudad = $_POST['ciudad'];
  $tipo = $_POST['tipo'];
  $query = "INSERT INTO edificio(nombre,direccion,ciudad,tipo) VALUES ('$nombre', '$direccion', '$ciudad', '$tipo')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Error en consulta de inserción.");
  }

  $_SESSION['message'] = 'Información almacenada satisfactoriamente.';
  $_SESSION['message_type'] = 'success';
  header('Location: principal.php');

}

?>

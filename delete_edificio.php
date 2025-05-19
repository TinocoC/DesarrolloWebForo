<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM edificio WHERE Id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Consulta de eliminación falló.");
  }

  $_SESSION['message'] = 'Información removida satisfactoriamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: principal.php');
}

?>

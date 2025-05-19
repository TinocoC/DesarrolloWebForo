<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'php_mariadb_crud_edificio'
) or die(mysqli_erro($mysqli));

?>

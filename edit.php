<?php
include("db.php");
$nombre = '';
$direccion= '';
$ciudad= '';
$tipo= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM edificio WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $direccion = $row['direccion'];
    $ciudad = $row['ciudad'];
    $tipo = $row['tipo'];

  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre= $_POST['nombre'];
  $direccion = $_POST['direccion'];
  $ciudad = $_POST['ciudad'];
  $tipo = $_POST['tipo'];

  $query = "UPDATE edificio set nombre = '$nombre', direccion = '$direccion', ciudad = '$ciudad', tipo = '$tipo' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Información actualizada satisfactoriamnete';
  $_SESSION['message_type'] = 'warning';
  header('Location: principal.php');
}

?>
<?php include('includes/header_actualizar_edificio.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <tr>Nombre</tr>
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualizar nombre">
        </div>
        <div class="form-group">
          <tr>Dirección</tr>
        <textarea name="direccion" class="form-control" cols="30" rows="1"><?php echo $direccion;?></textarea>
        </div>
         <div class="form-group">
          <tr>Ciudad</tr>
        <textarea name="ciudad" class="form-control" cols="30" rows="1"><?php echo $ciudad;?></textarea>
        </div>
         <div class="form-group">
          <tr>Tipo</tr>
        <textarea name="tipo" class="form-control" cols="30" rows="1"><?php echo $tipo;?></textarea>
        </div>
        <div class="form-group">
        <button class="btn-success" name="update" class="btn btn-outline-success"> 
          
        Actualizar Información Edificio

         
        </button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>

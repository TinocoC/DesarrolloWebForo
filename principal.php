<?php include("db.php"); ?>


<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MENSAJES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!--  FORMULARIO DE EDIFICO -->
      <div class="card card-body">
        <form action="grabar_edificio.php" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre" autofocus>
          </div>
          <div class="form-group">
            <textarea name="direccion" rows="1" class="form-control" placeholder="Ingrese dirección CASA"></textarea>
          </div>

          <div class="form-group">
            <textarea name="ciudad" rows="1" class="form-control" placeholder="Ingrese Ciudad"></textarea>
          </div>

          <div class="form-group">
            <textarea name="tipo" rows="1" class="form-control" placeholder="Ingrese tipo de edificio"></textarea>
          </div>

          <input type="submit" name="save_edificio" class="btn btn-success btn-block" value="Guardar Edificio">
          


        </form>
      </div>
    </div>

    <!--  LISTAR INFORMACION DE EDIFICIO -->
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Ciudad</th>
            <th>Tipo</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM edificio";
                 

          $result_edificio = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_edificio)) { ?>
          <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td><?php echo $row['ciudad']; ?></td>
            <td><?php echo $row['tipo']; ?></td>
            <td>
             <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
                
              </a>
              <a href="delete_edificio.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>

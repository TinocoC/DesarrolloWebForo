<?php include("db.php"); 

?>

<?php include('includes/headerLogin.php'); ?>

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

     <form id="formAuthentication" class="mb-3" action="autenticar.php" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Correo electrónico o nombre de usuario</label>
                  <input
                    type="text"
                    class="form-control"
                    id="usuario"
                    name="usuario"
                    placeholder="Ingrese su correo o usuario"
                    autofocus
                  />
                  
                   <input
                    type="hidden"
                    class="form-control"
                    id="inred"
                    name="inred"
                    placeholder="Ingrese su correo o usuario"
                    autofocus
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Contraseña</label>
                    <a href="recuperarcontrasena.php">
                      <small>¿Has olvidado tu contraseña?</small>
                    </a>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="contrasena"
                      class="form-control"
                      name="contrasena"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
               
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Recordarme </label>
                  </div>
                </div>
                         <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Inicia sesión</button>
                </div>
              </form>

    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>

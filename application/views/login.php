


   <!-- 4 options Menu -->
      <div class="row">
        <div class="col-md-9"></div>
        <div class="col-md-3 ">
          <a class="opt1 text-white" href="#">  Agenda  |</a>

          <a class="opt2 text-white" href="#">  Blog   |</a>

          <a class="opt3 text-white" href="#">  Galeria   |</a>

          <a class="opt4 text-white" href="#">  Siguenos   |</a>

        </div>
      </div>
      <!-- 4 options menu End -->


      <!-- Navbar -->
      <div class="row">

        <div class="col-md-1">

        </div>
        <div class="col-md-10">

          <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
              <div class="bg-black">
                <h5 class="text-white h4">Collapsed content</h5>
                <span class="text-muted">Toggleable via the navbar brand.</span>
              </div>
            </div>
            <nav class="d-flex navbar navbar-dark bg-light mr-0 titulos_menu">

              <img class="p-2" src="<?= base_url("assets/img/Asset 1.png") ?>" alt="logo">

              <a class="p-2 navbar-brand text-body h4" href="#">Inicio</a>


              <a class="p-2 navbar-brand text-body h4" href="#">Tu Coach</a>

              <a class="p-2 navbar-brand text-body h4" href="#">Entrenamientos </a>

              <a class="p-2 navbar-brand text-body h4" href="#">  Contacto</a>

              <img  class="ml-auto p-2" src="<?= base_url("assets/img/Asset 2.png") ?>" alt="user icon">


              <button class="col-md-1 navbar-toggler bg-danger" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

            </div>
          </div>
        </nav>
      </div>
      <!-- Navbar End -->


<!-- Card login -->
<div class="card1 " >
  <div class="card-body1 border-secondary">
    <h2 class="card-title1 text-center mb-3 mt-2">Iniciar sesión</h2>

      <form action="<?= base_url("home/iniciar_sesion_post") ?>" method="POST" class="forma_login" id="forma_login" name="forma_login" enctype="multipart/form-data">
      <div class="form-group row">
        <div class="col-sm-1"></div>

        <div class="col-sm-10">
          <input type="text" class="form-control mx-auto" name="usuario" id="inputPassword" placeholder="Correo Electrónico">
        </div>
      </div>
      <div class="col-sm-1"></div>

      <div class="form-group row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
          <input type="password" class="form-control mx-auto" name="contrasena" id="inputPassword" placeholder="Contraseña">
        </div>
        <div class="col-sm-1"></div>
      </div>
    </form>




    <div class="row mb-2 mt-2">
      <div class="col-sm-1"></div>
     <!-- <a href="#" class=" text-center col-sm-10 text-secondary">Olvidaste tu contraseña?</a>-->
    </div>
    <div class="col-sm-1"></div>

    <div class="row mb-2 mt-2">
      <div class="col-sm-1"></div>
      <a href="#" class="btn btn-danger rounded-0 mb-2 mt-2 col-sm-10" onclick="submit_login();">Iniciar sesión</a>
      <div class="col-sm-1"></div>

      <?php if(isset($datos_incorrectos)):?>

        <div style="text-align: center; color: #FB0D1B; font-family: 'SourceSansPro-Bold'; font-size: 20px; margin-top: 20px; width: 100%;" ><?= $datos_incorrectos ?></div>

      <?php endif; ?>
    </div>

    <!--<div class="row mb-3 mt-2">
      <div class="col-sm-1"></div>
      <a href="#" class="col-sm-10 text-center text-secondary">Eres nuevo?</a>
      <div class="col-sm-1"></div>
    </div>
    <div class="row mb-2 mt-2">
      <div class="col-sm-1"></div>
      <a href="#" class="btn btn-danger  rounded-0 text-center col-sm-10">Crear tu cuenta</a>
      <div class="col-sm-1"></div>
    </div>-->
  </div>
</div>


<!-- Card login Ends -->





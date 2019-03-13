<div class="smallbody">

<!-- 4 options Menu -->
<div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4 ">
          <a class="opt" href="#">  Agenda  |</a>

          <a class="opt" href="#">  Blog   |</a>

          <a class="opt" href="#">  Galeria   |</a>

          <a class="opt" href="#">  Siguenos   |</a>

        </div>
      </div>
      <!-- 4 options menu End -->


         <!-- Navbar -->
         <div class="row mynavbar">

<div class="col-md-1 col-sm-1 col-1 col-lg-1 ">

</div>
<div class="col-md-10 col-sm-10 col-10 col-lg-10">

  
 
    <nav class="d-flex navbar pb-0 mb-5 pl-0 navbar-expand-lg bg-light mr-0  titulos_menu">

      <img class="p-2 logo" src="<?= base_url("assets/img/Asset 1.png") ?>" alt="logo">

      

      <input type="image" src="<?= base_url("assets/img/Asset 2.png") ?>" name="saveForm" class="btTxt submit user" id="saveForm" >

      <!-- Collapse button -->
      
      <button class="navbar-toggler toggler-example pt-0 mr-0 rounded-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
        aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
            class="fas fa-bars fa-1x"></i></span></button>
    
      <!-- Collapsible content -->
      
      <div class="collapse navbar-collapse rounded-bottom rounded-top" id="navbarSupportedContent1">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-dark" href="<?= base_url("home/") ?>" >Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Tu coach</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="<?= base_url("home/misentrenamientos") ?>">Entrenamientos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="<?= base_url("home/contacto") ?>" >Contacto</a>
          </li>
        </ul>
        <!-- Links -->
        </div>
    
        </div>
        <div class="col-md-1 col-sm-1 col-1 col-lg-1"> </div>
</div>
    <!-- Navbar Ends -->

<!-- javier card -->

<div class="row row-login">
<div class="col-md-3 col-sm-2 col-1 col-lg-4"></div>
<div class=" col-md-6 col-sm-8 col-10 col-lg-4">
    <div class="infowhite-login  border-0">
    <div class=" card-text card-infowhite ">

    
                  <div class="titulo-contacto-form col-12 pl-0 pr-0 text-center">Recuperar contrasena</div> <br> <br>

    
                 
                        <div class="row mb-3 mt-2 password-text text-center">Para tu seguridad necesitamos verificar tu identidad. Hemos enviado tu contrasena a tu correo electronico
                          
                          <a href="#" class="col-sm-12 text-center text-contrasena-recovery"> <u> info@entrenandoalcorazon.com</u> </a>
                         
                        </div>


                  <a href="<?= base_url("home/login") ?>"  class="btn btn-login contacto-button rounded-0 mb-2 mt-2 col-sm-12" onclick="submit_login();">Iniciar sesión</a>
                  <?php if(isset($datos_incorrectos)):?>

                  <div style="text-align: center; color: #FB0D1B; font-family: 'SourceSansPro-Bold'; font-size: 20px; margin-top: 20px; width: 100%;" ><?= $datos_incorrectos ?></div>

                  <?php endif; ?>

                  <div class="row mb-3 mt-2">
             
                  <a href="<?= base_url("home/signup") ?>"  class="col-sm-12 text-center text-nuevo-contacto"> <u> Eres nuevo? </u></a>
            
                </div>
             
                
                  <a href="<?= base_url("home/signup") ?>"  class="btn btn-login contacto-button rounded-0 col-sm-12">Crear tu cuenta</a>
               
                
                </div>
                </div>
                
                
          </div>
            <div class="col-md-3 col-sm-2 col-1 col-lg-4"></div>

</div>




<!-- Card login Ends -->




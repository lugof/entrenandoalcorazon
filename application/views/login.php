<div class="smallbody">

 <!-- 4 options Menu -->
 <div class="row row-uppermenu">
       
       <div class="col-12 ">
         <a class="opt" href="#">  Agenda  |</a>

         <a class="opt " href="#">  Blog   |</a>

         <a class="opt " href="#">    Galería    |</a>

         <a class="opt" href="#">  Síguenos   </a>

       </div>
     </div>
     <!-- 4 options menu End -->


      <!-- Navbar -->
      <div class="row" id="inicio">

        <div class="col-md-1 col-sm-1 col-1">

        </div>
        <div class="col-md-10 col-sm-10 col-10">

          
         
            <nav class="d-flex navbar main-navbar pb-0 pl-0 navbar-expand-lg bg-light mr-0  titulos-navbar">

              <img class="p-2 logo" src="<?= base_url("assets/img/Asset 1.png") ?>" alt="logo">

              

           
              <div class="col-md-1 col-sm-1 burger-button"> </div>
              <!-- Collapse button -->
              
              
              <!-- Collapsible content -->


              <ul class="navbar-nav mr-auto">
                  <li class="nav-item d-flex active">
                    <a class="nav-link text-dark d-flex" href="<?= base_url("home/#inicio") ?>">Inicio <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item d-flex">
                    <a class="nav-link d-flex text-dark" href="<?= base_url("home/#tu-coach") ?>">Tu coach</a>
                  </li>
                  <li class="nav-item d-flex">
                    <a class="nav-link d-flex text-dark" href="<?= base_url("home/#entrenamientos") ?>">Entrenamientos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link d-flex text-dark" href="<?= base_url("home/contacto") ?>">Contacto</a>
                  </li>
                </ul>
                <a type="image"    name="saveForm" class="btTxt submit user" id="saveForm" href="<?= base_url("home/login") ?>"> <img class="btTxt submit user " id="saveForm "src="<?= base_url("assets/img/Asset 2.png") ?>"> </a>

                <a href="#" class="burger-link" data-toggle="collapse" > <img src="<?= base_url("assets/img/btn-menu@2x.png") ?>" alt="burger button"  class="burger-button"></a>
             

                </div>

        </nav>
      </div>
      <!-- Navbar End -->


<!-- javier card -->

<div class="row row-login">
<div class="col-md-3 col-sm-2 col-1 col-lg-4"></div>
<div class=" col-md-6 col-sm-8 col-10 col-lg-4">
    <div class="infowhite-login  border-0">
    <div class=" card-text card-infowhite ">

    
                  <div class="titulo-contacto-form col-12 pl-0 pr-0 text-center">Iniciar sesión</div> <br> <br>

    
                  <div class="input-group mt-2 mb-3">
                  <input type="text" class="form-control form-contacto" placeholder="Correo electrónico" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  </div>
                  <div class="input-group mb-3">
                  <input type="text" class="form-control form-contacto" placeholder="Contraseña" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  </div>
                        <div class="row mb-3 mt-2">
                          
                          <a href="<?= base_url("home/passwordRecovery") ?>" class="col-sm-12 text-center text-contrasena-contacto"> <u>¿Olvidaste tu contraseña? </u></a>
                         
                        </div>


                  <a href="#" class="btn btn-login contacto-button rounded-0 mb-2 mt-2 col-sm-12" onclick="submit_login();">Iniciar sesión</a>
                  <?php if(isset($datos_incorrectos)):?>

                  <div style="text-align: center; color: #FB0D1B; font-family: 'SourceSansPro-Bold'; font-size: 20px; margin-top: 20px; width: 100%;" ><?= $datos_incorrectos ?></div>

                  <?php endif; ?>

                  <div class="row mb-3 mt-2">
             
                    <div class="col-3 mt-3"><hr></div>
                  <a href="<?= base_url("home/signup") ?>" class="col-sm-6 text-center text-nuevo-contacto "> <u> ¿Eres nuevo? </u></a>
                  <div class="col-3 mt-3"><hr></div>
                </div>
             
                
                  <a href="<?= base_url("home/signup") ?>" class="btn btn-login contacto-button rounded-0 col-sm-12">Crear tu cuenta</a>
               
                
                </div>
                </div>
                
                
          </div>
            <div class="col-md-3 col-sm-2 col-1 col-lg-4"></div>

</div>




<!-- Card login Ends -->




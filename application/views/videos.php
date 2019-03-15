<div class="smallbody">
 <!-- 4 options Menu -->
 <div class="row row-uppermenu">
       
       <div class="col-12 ">
         <a class="opt" href="#">  Agenda  |</a>

         <a class="opt " href="#">  Blog   |</a>

         <a class="opt " href="#">  Galeria   |</a>

         <a class="opt" href="#">  Siguenos   </a>

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

    <div class="row">
    <div class="col-1"></div>


    <!-- left card -->



    <div class="card fullcard-user col-2" >
  
  <div class="card-body card-user">
      <div class="user-greeting mb-3">Hola, Mayra</div>
  <img src="<?= base_url("assets/img/Asset 2.png") ?>" class="card-img-top user-icon" alt="..." style= 'width: 5rem;'>
  
    
    <ul>
  <a  href="<?= base_url("home/espacio") ?>" class="user-opt"><li>Mi espacio</li></a>
  <a  href="<?= base_url("home/misdatos") ?>" class="user-opt"><li>Mis datos</li></a>
  <a href="<?= base_url("home/misentrenamientos") ?>" class="user-opt"><li>Mis entrenamientos</li></a>
  <a href="#" class="user-opt mb-3" id="user-opt-notes" ><li>Mis notas</li></a>
  <hr>
  <a href="#" class="user-opt "  id="user-opt-logout"> <li>Cerrar sesion</li></a>
</ul>


</div>
</div>
<div class="col-1"> </div>


<div class="col-6 contenedor-videos pl-0 pr-0">
<div class="titulo-train-form col-12 pl-0 pr-0 ">Detox emocional, "Superando al Ex"</div> 
        
        <div class="row">
        <div class="col-8 pr-0 mr-0">
        <img class="video-img1" src="<?= base_url("assets/img/Asset 10.png") ?>" alt="logo">
          </div>
        
        <div class="col-4 ml-0 pl-0">
        <div class="video-menu" >
        <div class="row">
            <div class="col-12">
            <select class="custom-select video-list rounded-0" id="video-list" size="8">
             
              <option class="video-opt" value="1" selected >Dia 1</option>
              <option class="video-opt video-par" value="2">Dia 2</option>
              <option class="video-opt" value="3">Dia 3</option>
              <option class="video-opt video-par" value="4">Dia 4</option>
              <option class="video-opt" value="5">Dia 5</option>
              <option class="video-opt video-par" value="6">Dia 6</option>
              <option class="video-opt" value="7">Dia 7</option>
              <option class="video-opt video-par" value="8">Dia 8</option>
              <option class="video-opt" value="9">Dia 9</option>
              <option class="video-opt video-par" value="10">Dia 10</option>
              <option class="video-opt" value="11">Dia 11</option>
              <option class="video-opt video-par" value="12">Dia 12</option>
              <option class="video-opt" value="13">Dia 13</option>
              <option class="video-opt video-par" value="14">Dia 14</option>
              <option class="video-opt" value="15">Dia 15</option>
              <option class="video-opt video-par" value="15">Dia 16</option>
            </select>
  </div> </div> 
    </div>
      </div>

</div>

        <div class="row row-resources">
        <p class="recursos-text col-6"> Recursos </p>
              <div class=" col-3"></div>
                <button class="btn entrenando_btn col-3 rounded-0" id="btn-tomarnota" type="input" href="#">
                    Tomar nota
                 </button>
              </div>
        <br>



                  <div class="row">
                  <div class="col-6 pr-2"> 
              
                     <button class="btn btn-video-gradient1 rounded-0" type="input" href="#">
                         Cuaderno de trabajo - Dia 1

                         <img class=" white-arrow" src="<?= base_url("assets/img/icn-flecha_blanca.png") ?>" alt="logo">
                     </button>
                   
                  </div>
 


                  
                  <div class="col-6 pl-2">
                    <button class="btn btn-video-gradient2 rounded-0" type="input" href="#">
                         Videos de Youtube  -  Dia 1
                         <img class=" white-arrow" src="<?= base_url("assets/img/icn-flecha_blanca.png") ?>" alt="logo">
                    </button>
                  </div>
                  </div>
                  <div class="row row-resources">
<div class="col-6 pr-2 mt-2">
    <button class="btn btn-video-gradient3 rounded-0" type="input" href="#">
      Grupo de facebook - Superando al Ex
      <img class=" white-arrow" src="<?= base_url("assets/img/icn-flecha_blanca.png") ?>" alt="logo">
</button>

    </div>
    <div class="col-6"></div>
      
</div>
                    </div>




<div class="col-2"></div>

</div>

</div>



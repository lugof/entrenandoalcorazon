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
            <a class="nav-link text-dark" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Tu coach</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Entrenamientos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Contacto</a>
          </li>
        </ul>
        <!-- Links -->
        </div>
    
        </div>
        <div class="col-md-1 col-sm-1 col-1 col-lg-1"> </div>
</div>
    <!-- Navbar Ends -->

    <div class="row">
    <div class="col-1"></div>


    <!-- left card -->



    <div class="card fullcard-user col-2" >
  
  <div class="card-body card-user text-center"> 
      <div class="user-greeting">Hola, Mayra</div>
  <img src="<?= base_url("assets/img/Asset 2.png") ?>" class="card-img-top" alt="..." style= 'width: 5rem;'>
  
    

  <div><a href="#" class="user-opt">Mi espacio</a></div>
  <div><a href="#" class="user-opt">Mis datos</a></div>
  <div><a href="#" class="user-opt">Mis entrenamientos</a></div>
  <div><a href="#" class="user-opt mb-3">Mis notas</a></div>
  <hr>
  <div> <a href="#" class="user-opt " > Cerrar sesion</a></div>
  </div>



</div>






<div class="col-8 contenedor-espacio">
<div class="titulo-contacto-form col-12 pl-0 pr-0 text-center">Bienvenido a tu nuevo espacio</div> <br> <br>
<div class="row mb-3 mt-2 espacio-text text-center">Hemos renovado completamente este nuevo espacio para adaptarlo a ti y que en el encuentres todo lo relativo a tus entrenamientos, la agenda de eventos, notas, Descubrelo!
</div>
<div class="black-title-espacio"> Listo para tu proximo entrenamiento?

<br>
<br>

<div class="carousel mt-5" data-slick='{"slidesToShow":4, "slidesToScroll":3}'>

  
            <div> <img src="<?= base_url("assets/img/cursos-2.png") ?>" class="image-carousel" id="image-carousel2" alt="carousel2" ></div>
            <div>  <div class="whitesquare-carousel"> Dia 1 de 30   <div class="whitesquare-text"> DETOX EMOCIONAL SUPERANDO AL EX </div> </div> </div>
            <div><img src="<?= base_url("assets/img/cursos-3.png") ?>" class=" image-carousel" alt="carousel2" ></div>
            <div>  <div class="whitesquare-carousel"> Dia 1 de 30   <div class="whitesquare-text"> DETOX + PNL </div> </div> </div>
            <div class="col-6 carousel1"><img src="<?= base_url("assets/img/cursos-1.png") ?>" class="image-carousel " alt="carousel1" ></div>
            <div><img src="<?= base_url("assets/img/cursos-4.png") ?>" class="image-carousel " alt="carousel2" ></div>

        </div>


   
  
      

</div>


<div class="row row-gradient">
     <div class="col-4 pr-0 pl-0 ">   <div class="col-4 espacio-gradientcard" id="gradient1"> </div> </div>
     <div class="col-4 pr-0 pl-0">  <div class="col-4 espacio-gradientcard" id="gradient2"> </div></div>
     <div class="col-4 pr-0 pl-0">  <div class="col-4 espacio-gradientcard" id="gradient3"> </div></div>


</div>
 
</div>

 


<div class="col-1"></div>
</div>
</div>



<script>
    $(document).ready(function(){
  $('.carousel').slick({espacioname: "espacio" });
});
    </script>
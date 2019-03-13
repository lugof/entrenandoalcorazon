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
            <a class="nav-link text-dark"  href="<?= base_url("home/") ?>">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Tu coach</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="<?= base_url("home/misentrenamientos") ?>">Entrenamientos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark"  href="<?= base_url("home/contacto") ?>">Contacto</a>
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


<div class="col-6 contenedor-misdatos">
<div class="titulo-contacto-form col-12 pl-0 pr-0 ">Mis Datos</div> <br> <br>
  <div class="row mb-3 mt-2 misdatos-text text-center">Modifica tus datos personales a continuacion para que tu cuenta este actualizada.
  </div>
    <div class="row row1-datos">

        <div class="col-2"> 
            <img src="<?= base_url("assets/img/Asset 2.png") ?>" class="card-img-top user-icon" alt="..." style= 'width: 5rem;'>
        </div>
       
        <button class="btn misdatos-btn rounded-0 col-2" type="input" href="#">
      Subir nueva imagen
</button> 
           <button class="btn misdatos-whitebtn rounded-0 col-2" type="input" href="#">
      Eliminar
</button>  



    </div>

<br>
<br>


          <div class="row inputs-row">
              <div class="col-6">
            <input  class="datos-input col-6" placeholder=" Correo electronico"  type="text" name="">
              </div>
              <div class="col-6">
            <input  class="datos-input col-6" placeholder=" Telefono"  type="text" name=""><br><br>
              </div> </div>

              <div class="row inputs-row">
              <div class="col-6">
            <input  class="datos-input col-6" placeholder=" Nombre(s)"  type="text" name="">
              </div>
              <div class="col-6">
            <input  class="datos-input col-6" placeholder=" Apellido(s)"  type="text" name=""><br><br>
              </div> </div>
              <div class="row">
              <div class="col-5">
                <p>Fecha de nacimiento: </p>  
<select>
<label for="exampleFormControlSelect1">01</label>
  <option value="1">01</option>
  <option value="2">02</option>
  <option value="3">03</option>
  <option value="4">04</option>
  <option value="1">05</option>
  <option value="2">06</option>
  <option value="3">07</option>
  <option value="4">08</option>
  <option value="1">09</option>
  <option value="2">10</option>
  <option value="3">11</option>
  <option value="4">12</option>
  <option value="1">13</option>
  <option value="2">14</option>
  <option value="3">15</option>
  <option value="4">16</option>
  <option value="1">17</option>
  <option value="2">18</option>
  <option value="3">19</option>
  <option value="4">20</option>
  <option value="1">21</option>
  <option value="2">22</option>
  <option value="3">23</option>
  <option value="4">24</option>
  <option value="1">25</option>
  <option value="2">26</option>
  <option value="3">27</option>
  <option value="4">28</option>
  <option value="1">29</option>
  <option value="2">30</option>
  <option value="3">31</option>
</select>

<select>
<label for="exampleFormControlSelect1">ENE</label>
  <option value="enero">ENERO</option>
  <option value="febrero">FEBRERO</option>
  <option value="marzo">MARZO</option>
  <option value="abril">ABRIL</option>
  <option value="mayo">MAYO</option>
  <option value="junio">JUNIO</option>
  <option value="julio">JULIO</option>
  <option value="agosto">AGOSTO</option>
  <option value="septiembre">SEPTIEMBRE</option>
  <option value="octubre">OCTUBRE</option>
  <option value="noviembre">NOVIEMBRE</option>
  <option value="diciembre">DICIEMBRE</option>
 </select>

 <select>
<label for="exampleFormControlSelect1">1980</label>
  <option value="1980">1980</option>
  <option value="1981">1981</option>
  <option value="1982">1982</option>
  <option value="1983">1983</option>
  <option value="1984">1984</option>
  <option value="1985">1985</option>
  <option value="1986">1986</option>
  <option value="1987">1987</option>
  <option value="1988">1988</option>
  <option value="1989">1989</option>
  <option value="1990">1990</option>
  <option value="1991">1991</option>
  <option value="1992">1992</option>
  <option value="1993">1993</option>
  <option value="1994">1994</option>
  <option value="1995">1995</option>
  <option value="1996">1996</option>
  <option value="1997">1997</option>
  <option value="1998">1998</option>
  <option value="1999">1999</option>
 </select>
 </div>

 <div class="col-5">
    <p>Sexo </p>
    
  <span><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked></span>
  <label class="form-check-label" for="exampleRadios1">Hombre</label>
<br>
<br>
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">Mujer</label>


 </div>


              </div>



              <div class="row inputs-row mt-3">
            <div class="col-6 ">
            <input  class="datos-input2 col-6" id="datosinput1" placeholder=" Pais"  type="text" name="">
           

            <input  class="datos-input2 col-6" id="datosinput2" placeholder="Estado"  type="text" name="">
              </div>
              <div class="col-6"> 
              <input  class="datos-input2 col-6" id="datosinput1" placeholder="Municipio"  type="text" name="">
              <input  class="datos-input2 col-6" id="datosinput2" placeholder="Codigo Postal"  type="text" name="">
              </div>


              

</div>
<div class="row inputs-row">
              <div class="col-6">
            <input  class="datos-input col-6" placeholder="Direccion"  type="text" name="">
              </div>
</div>
<div class="row inputs-row">
              <div class="col-6">
            <input  class="datos-input col-6" placeholder="Contrasena"  type="text" name="">
              </div>
              <div class="col-3">
              <button class="btn misdatos-upload rounded-0 col-2" type="input" href="#">
                    Cambiar contrasena
              </button> 
            </div>



<div class="col-3"></div>
</div>
<div class="row inputs-row">
<div class="col-4">
              <button class="btn misdatos-last1 rounded-0 col-2" type="input" href="#">
                    Actualizar datos
              </button> 
            </div>
            <div class="col-4">       
              <button class="btn misdatos-last2 rounded-0 col-2" type="input" href="#">
                Cancelar
              </button>  
</div>
            <div class="col-4">
            <button class="btn misdatos-last2 rounded-0 col-2" type="input" href="#">
                Eliminar Cuenta
              </button>  
            </div>
</div>
</div>
<div class="col-2"></div>
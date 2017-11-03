<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
	
  <div class="menu">
  <nav>
    <ul>
      <a class="selector" href="../index.php">INICIO</a>
      <a class="selector" href="nosotros.php">NOSOTROS</a>
      <a class="selector" href="servicios.php">SERVICIOS</a>
      <a class="selector" id="select" href="contacto.php">CONTACTO</a>
    </ul>
  </nav>
   <div class="op-menu">
    <i class="fa fa-bars fa-2x abrir" aria-hidden="true"></i>
  </div>
</div>
<header>
  <div class="container">
    <figure class="logo pull-left">
      <img src="../img/lotan.png" alt="LOTAN" class="img-responsive">
    </figure>

    <div class="text-h pull-right">
      <p class="pull-left correo-h"><i style="color: #F6A41D;" class="fa fa-envelope-o" aria-hidden="true"></i> info@construccioneslotan.com</p>
      <p class="pull-right horario-h"><i style="color: #F6A41D;" class="fa fa-clock-o" aria-hidden="true"></i> Lunes a Viernes de 9 am a 6 pm</p>
    </div>
  </div>
</header>

<section id="contact">
      <div class="section-content">
        <h1 class="section-header">Formulario de contacto</h1>
        <h3 class="txt-contact">Escríbenos y resolveremos todas tus dudas. Apoyános proporcionando los siguientes datos.</h3>
      </div>
      <div class="contact-section">
      <div class="container">
        <form onbubmit="return false">
          <div class="col-xs-12 col-md-6 form-line br">
              <div class="form-group">
                <label for="exampleInputUsername">Nombre</label>
                <input type="text" class="form-control" id="txtNOMBRE" placeholder=" Escribe tu nombre completo">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <input type="email" class="form-control" id="txtCORREO" placeholder=" Escribe tu correo electrónico">
              </div>  
              <div class="form-group">
                <label for="telephone">Teléfono</label>
                <input type="tel" class="form-control" id="txtTELEFONO" placeholder=" Escribe tu número teléfonico">
              </div>
            </div>
            <div class="col-xs-12 col-md-6 br">
              <div class="form-group">
                <label for ="description">Comentario</label>
                <textarea  class="form-control" id="txtCOMENTARIO" placeholder="Escribe tu comentario"></textarea>
              </div>

              <div id="_AJAX_PRE_"></div>
              <div class="btn-centro">

                <button type="button" class="btn btn-default submit btn-envio" onclick="sendCORREO()"><i class="fa fa-paper-plane" aria-hidden="true"></i>  ENVIAR</button>
              </div>
              
          </div>
        </form>
      </div>
    </section>

<a class="go-top" href="#">Subir</a>
<?php include 'pie.php' ?>

<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>
<script src="../js/contacto.js"></script>
<script src="../js/sendCORREO.js"></script>
</body>
</html>
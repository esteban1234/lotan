<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
	
  <div class="linea">
  <p><i class="fa fa-phone" aria-hidden="true"></i> PENDIENTE | COTIZAMOS SIN COSTO &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-envelope-o" aria-hidden="true"></i> info@construccionesduncor.com</p>
</div>

<header>
  <figure class="logo pull-left">
    <img src="../img/duncor.png" class="img-responsive" alt="DUNCOR">
  </figure>
  <nav class="pull-right">
    <ul>
      <a class="selector" href="../index.php">INICIO</a>
      <a class="selector" href="nosotros.php">NOSOTROS</a>
      <a class="selector" href="servicios.php">SERVICIOS</a>
      <a class="selector" id="select" href="contacto.php"><i class="fa fa-phone" aria-hidden="true"></i> CONTACTO</a>
    </ul>
  </nav>
</header>

<div class="banners">
  <p>CONTACTO</p>
</div>

<div class="cont seccion2">
  <ul class="contact">
    <li style="text-align: left;vertical-align: top;">
      <p><i class="fa fa-map-marker fa-3x"></i></p>
      <p><strong>Catcomp Kft.</strong><br>PRIV. AGUA #592-A <br>ENTRANDO POR CIRCUITO LAS FLORES SUR. <br>COL. LA GLORIA. TUXTLA GUTIERREZ. <br> CHIAPAS. C.P. 29038</p>
    </li>
    <li style="text-align: left;vertical-align: top;">
      <p><i class="fa fa-phone fa-3x"></i></p>
      <p><strong>Phone:</strong><br>PENDIENTE</p>
    </li>
    <li style="text-align: left;vertical-align: top;">
      <p><i class="fa fa-envelope fa-3x"></i></p>
      <p><strong>E-mail:</strong><br>construccionesduncor.com</p>
    </li>
    <li style="text-align: left;vertical-align: top;">
      <p><i class="fa fa-clock-o fa-3x"></i></p>
      <p><strong>Horario:</strong><br>Lunes a Viernes de 9 am a 6 pm</p>
    </li>
  </ul>
</div>

<div class="seccion3">
  <p class="textof">Escribenos tus comentario, dudas o preguntas, estamos para servirte.</p> <br><br>
  <div class="container">
    <div class="row">
      <form role="form" id="contact-form" class="contact-form">
                      <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                              <input type="text" class="form-control" name="Name" autocomplete="off" id="Name" placeholder="Escribe tu nombre completo">
                        </div>
                      </div>
                        <div class="col-md-4">
                        <div class="form-group">
                              <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="Escribe tu correo electronico">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                              <input type="text" class="form-control" name="tel" autocomplete="off" id="email" placeholder="Escribe tu numero teléfonico">
                        </div>
                      </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                              <textarea class="form-control textarea" rows="3" name="Message" id="Message" placeholder="Escribe tu comentario"></textarea>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-12">
                    <button type="submit" class="btn main-btn pull-right">ENVIAR</button>
                    </div>
                    </div>
                  </form>
    </div>
  </div>
</div>
<div class="mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1135.8248473947647!2d-93.17742496885256!3d16.754563136704775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd97d977e5d03%3A0xf949657d7faf26d0!2sAgua+592%2C+La+Gloria%2C+29054+La+Gloria%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1507843985988" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<a class="go-top" href="#">Subir</a>
<?php include 'pie.php' ?>

<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>
<script src="../js/contacto.js"></script>
</body>
</html>
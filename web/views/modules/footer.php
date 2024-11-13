<!-- Enlace al archivo CSS externo -->
<link rel="stylesheet" href="<?php echo $path ?>views/assets/css/template/template.css">

<div class="container-fluid bg-dark small">
  <div class="container py-5 text-light">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
      <div class="col row">
        <div class="col-12 col-sm-4 col-md-3 col-lg-4">
          <h4 class="lead">
            <a href="#" class="text-uppercase">Ropa</a>
          </h4>
          <hr class="border-white">
          <ul>
            <li><a href="">Elegante</a></li>
            <li><a href="">Sport</a></li>
            <li><a href="">Otro</a></li>
            <li><a href="">Interior</a></li>
          </ul>
        </div>
        <div class="col-12 col-sm-4 col-md-3 col-lg-4">
          <h4 class="lead">
            <a href="#" class="text-uppercase">Artículos</a>
          </h4>
          <hr class="border-white">
          <ul>
            <li><a href="">Relojes</a></li>
            <li><a href="">Pulseras</a></li>
            <li><a href="">Otro</a></li>
            <li><a href="">Interior</a></li>
          </ul>
        </div>
      </div>
      <div class="col my-3 my-lg-0 px-lg-5 text-light">
        <h1 class="lead small">Dudas e inquietudes, contáctenos en:</h1>
        <br>
        <h1 class="lead small">
          <i class="fa fa-phone-square pe-1"></i>2324505896
          <br><br>
          <i class="fa fa-envelope pe-1"></i>camilocangaro@gmail.com
          <br><br>
          <i class="fa fa-map-marker pe-1"></i>25 Nro 324
          <br><br>
          Mercedes | Buenos Aires
        </h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.996648981838!2d-59.433680924095874!3d-34.65478756019741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bc73bbe169024d%3A0xbe28d7511b441363!2sRufina%20Indumentaria!5e0!3m2!1ses!2sar!4v1731284371923!5m2!1ses!2sar"
          width="200" height="146" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col small my-3 my-lg-0">
        <h4>Resuelva su inquietud</h4>
        <form role="form" method="post">
          <input type="text" id="nombreContactenos" name="nombreContactenos" class="form-control" placeholder="Escriba su nombre" required>
          <br>
          <input type="email" id="emailContactenos" name="emailContactenos" class="form-control" placeholder="Escriba su email" required>
          <br>
          <textarea name="mensajeContactenos" id="mensajeContactenos" class="form-control" placeholder="Escriba su mensaje" rows="5" required></textarea>
          <br>
          <input type="submit" value="Enviar" class="btn btn-default templateColor float-end border-0 templateColor">
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Main Footer -->
<footer class="main-footer topColor">
  <div class="container">
    <!-- To the right -->
    <div class="float-end">
      <div class="d-flex justify-content-center" style="line-height:0px">
        <div class="p-2">
          <a href="https://www.facebook.com/rufinaindumentaria" target="_blank" class="text-white">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
        <div class="p-2">
          <a href="https://www.instagram.com/rufinaindumentariaok" target="_blank" class="text-white">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- Default to the left -->
    <small>&copy; <?php echo date("Y") ?> Todos los derechos reservados. RufinaIndumentaria</small>
  </div>
</footer>

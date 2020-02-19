
<?php get_header(); ?>
  <header class="header__main navbar-me container-fluid">
    <div class="cont-todo">
      <div class="logo">
        <a href="<?php bloginfo('url'); ?>">
          <img alt="TodoInmuebles" src="<?php echo get_template_directory_uri(); ?>/assets/img/Todoinmuebles-logo.svg">
        </a>
      </div>
      <button class="responsive-menu-btn">
        <svg class="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
          <path d="M14.000002 15.99999c-3.3137 0-6 2.68619-6 6 0 3.31359 2.6863 6 6 6h71.999996c3.3137 0 6-2.68641 6-6 0-3.31381-2.6863-6-6-6zm0 28.00003c-3.3137 0-6 2.6862-6 6 0 3.3136 2.6863 6 6 6h71.999996c3.3137 0 6-2.6864 6-6 0-3.3138-2.6863-6-6-6zm0 28c-3.3137 0-6 2.6862-6 6 0 3.3136 2.6863 6 6 6h71.999996c3.3137 0 6-2.6864 6-6 0-3.3138-2.6863-6-6-6z"
            style="text-indent:0;text-transform:none;block-progression:tb" overflow="visible" color="#000" />
        </svg>

        <svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20">
          <path d="M14.7 1.3c-.4-.4-1-.4-1.4 0L8 6.6 2.7 1.3c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4L6.6 8l-5.3 5.3c-.4.4-.4 1 0 1.4.2.2.4.3.7.3s.5-.1.7-.3L8 9.4l5.3 5.3c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4L9.4 8l5.3-5.3c.4-.4.4-1 0-1.4z"
          />
        </svg>
      </button>

      <div class="menu-left">
        <nav class="nav__menu">
          <div class="nav-item active">
            <a href="#">Inicio</a>
          </div>
          <div class="nav-item">
            <a href="#consigna">Consigna</a>
          </div>
          <div class="nav-item">
            <a href="#renta">Renta</a>
          </div>
          <div class="nav-item">
            <a href="#aliados">Plan Aliados</a>
          </div>
          <div class="nav-item">
            <a href="#servicios">Servicios</a>
          </div>
          <div class="nav-item">
            <a href="#contacto">Contacto</a>
          </div>
        </nav>
      </div>
  </header>
  <!-- SECCION INDEX -->
  <section class="content-information" id="index">
    <div class="title-banner">
      <div class="todoin">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logotipo-body.png">
      </div>
      <h2>UNA INMOBILIARIA PARA TODOS</h2>
    </div>
    <div class="buttons">
    <a style="margin-right: 20px;" href="#consigna">
      <div class="button">Consigna</div></a>
      
      <a style="margin-left: 20px;"href="#renta">
      <div class="button">Renta</div></a>
    </div>
  </section>
 <!-- SECCION INDEX -->

  <!-- SECCION CONSIGNA -->
    <section class="content-information" id="consigna">
    <div class="title-banner">
      <div class="todoin">
        <h1>SI TIENES UNA PROPIEDAD</h1>
        <h3>Nosotros podemos administrarla.</h3>
        <h4>Bien sea para alquilar o vender, no te preocupes por
          <br> cobros, con nosotros tienes tu plata fija mes a mes.</h4>
      </div>
      <div class="buttons">
        <button class="button" type="button" data-toggle="modal" data-target="#exampleModal">Consigna</button>
      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Complete los campos</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="zoho" class="modal-body">
       <iframe height='500px' width='100%' frameborder='0' allowTransparency='true' scrolling='auto' src='https://creator.zohopublic.com/nube_dinamica/inmuebles/form-embed/Posibles_clientes/wwByRh81rCWEzBfFzZJvpf5G8RAXy98vUQz6OXYQhaK6jyJUXaGNSyrr7J42CDAQvmM9KFtH4Ef3swSfRgkA8624gJRNwS9d9YUn'></iframe>
      </div>
    </div>
  </div>
</div>
  </section>
    <!-- SECCION CONSIGNA -->

      <!-- SECCION RENTA -->
   <section class="content-information renta-bg" id="renta">
    <div class="title-banner">
      <div class="todoin">
        <h1>SI NECESITAS RENTAR</h1>
        <h3>Lo hacemos más rápido y sin mucho papeleo.</h3>
        <h4>Te ofrecemos las más amplia oferta inmuebles
          <br> con un trato 100% personalizado.</h4>
      </div>
        <a href="<?php echo bloginfo('url').'/index.php/formulario/'; ?>" class="send">
        <div class="button">Renta</div>
        </a>
       </section>
  <!-- SECCION RENTA -->

  <!-- SECCION ALIDO -->
  <section class="content-information" id="aliados">
    <div class="title-banner">
      <div class="todoin">
        <h1>SÉ UN ALIADO</h1>
        <h3>Genera ingresos extra y obtén beneficios únicos.</h3>
      </div>
      <div class="buttons">
        <div class="button">Más info</div>
      </div>
  </section>
  <!-- SECCION ALIADO -->

  <!-- SECCION SERVICIOS -->
  <section class="content-information serv-bg" id="servicios">
    <div class="title-banner">
      <div class="todoin-serv">
        <div class="file-se">
          <h1 style="font-size: 35px;">REFORMAMOS TU CASA</h1>
          <p>No te quedes con las ganas de
            <br> construir esa cocina o ese baño que
            <br> soñaste, te acompañamos con las
            <br> reformas a tu hogar. </p>
          <img style="padding: 10%;" src="<?php echo get_template_directory_uri(); ?>/assets/img/LOGO-TODOREFORMAS.png" alt="">
          <div class="buttons">
          <a target="_blank" href="http://todoreformas.com.co/">
            <div style="font-size: 13px;" class="button">Más info</div></a>
          </div>
        </div>
        <div class="file-one">
          <h1 style="font-size: 35px;">DISEÑAMOS TUS SUEÑOS</h1>
           <p>Esos muebles y ese closet que
            <br>sueñas lo puedes, nuestra línea
            <br> de decoración y muebles está a
            <br> tu disposición.</p>
       
          <img style="padding: 10%; width: 130px" src="<?php echo get_template_directory_uri(); ?>/assets/img/LOGO-ISIDECO.png" alt="">
          <div class="buttons">
         <a target="_blank" href="http://isideco.co/">
            <div style="font-size: 13px;" class="button">Más info</div></a>
          </div>
        </div>
        <div class="file-se">
          <h1 style="font-size: 35px;">¿QUIERES INVERTIR?</h1>
          <p>Invierte en tus activos
            <br>inmobiliarios con rentabilidades
            <br>superiores por medio de nuestro
            <br>desarrollador inmobiliario.
          </p>
          <img style="padding: 10%;" src="<?php echo get_template_directory_uri(); ?>/assets/img/LOLO-INVEROPTIMA.png" alt="">
          <div class="buttons">
          <a  target="_blank" href="https://inveroptima.com/">
            <div style="font-size: 13px;" class="button">Más info</div></a>
          </div>
        </div>
      </div>
    </div>
  </section>      
  <!-- SECCION SERVICIOS -->

  <!-- SECCION FORMULARIO -->
  <section class="content-information renta-bg foo-cont" id="contacto">
    <div class="title-banner">
      <div class="todoin">
        <h1 class="cont">CONTÁCTANOS</h1>
        <!-- <form class="formulario" method="post">
          <input class="effect-1" type="text" name="nombre" placeholder="Nombre" required="required" />
          <input class="effect-1" type="email" name="correo" placeholder="Email" required="required" />
          <input class="effect-1" type="text" name="motivo" placeholder="Motivo" required="required" />
          <textarea name="textarea" placeholder="Mensaje" rows="3" cols="50"></textarea>
          <a href="#">
            <div class="buttons" style="padding-top: 35px;">
              <div class="button" style="font-size: 13px; ">Enviar</div>
            </div>
          </a>
        </form> -->
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1, 'title' => false, 'description' => false ) ); ?>
      </div>
  </section>
  <!-- SECCION FORMULARIO -->
</body>
<style>
body{
  height:300vh;
}
  </style>

  <script>
  $('.nav-item').click(function () {
  responsiveBtnIcon.classList.toggle("--is-open");
  navMenu.classList.toggle("--is-open");
});

  </script>

<?php get_footer(); ?>
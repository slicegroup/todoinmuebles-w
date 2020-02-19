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
          <div class="nav-item">
            <a  href="<?php echo bloginfo('url'); ?>">Inicio</a>
          </div>
          <div class="nav-item">
            <a href="<?php echo bloginfo('url').'/#consigna'; ?>">Consigna</a>
          </div>
          <div class="nav-item active">
            <a  class="<?php echo bloginfo('url').'/index.php/formulario'; ?>">Renta</a>
          </div>
          <div class="nav-item">
            <a href="<?php echo bloginfo('url').'/#aliados';?>">Plan Aliados</a>
          </div>
          <div class="nav-item">
            <a href="<?php echo bloginfo('url').'/#servicios'; ?>">Servicios</a>
          </div>
          <div class="nav-item">
            <a href="<?php echo bloginfo('url').'/#contacto'; ?>">Contacto</a>
          </div>
        </nav>
      </div>
  </header>
  <section class="content-information filt">
    <div class="view-product container" id="detalle-container">
      <!-- <div class="content-product">
        <h3 class="price">$825.000/M</h3>
        <h4>Apartamento en Arriendo</h4>
        <hr></hr>
        <div class="info-place">
        <h4 class="price">Castropol - Medellín</h4>
          <h4 class="price">Cód: 169</h4>
        </div>
        <div class="single-item">
          <div class="item" >
            <img style="width: 100%;" src="<?php echo get_template_directory_uri(); ?>/assets/img/property-01-exterior-400x300.jpg" alt="">
          </div>
           <div class="item">
            <img style="width: 100%;" src="<?php echo get_template_directory_uri(); ?>/assets/img/property-02-exterior-400x300.jpg" alt="">
           </div>
        </div>
      </div>
      <div class="content-product1">
        <div class="detail">
          <div  class="caraterics">
            <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/bed.svg" alt="">
            <p> 3 habitaciones</p>
          </div>  
              <div  class="caraterics">
            <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/bathroom.svg" alt="">
            <p> 3 baños</p>
          </div>  
              <div  class="caraterics">
            <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/house.svg" alt="">
            <p> 20 años</p>
          </div>  
              <div  class="caraterics">
            <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/tape-measure.svg" alt="">
            <p> 88.00m²</p>
          </div>  
              <div  class="caraterics">
            <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/area (1).svg" alt="">
            <p> $13,636/m²</p>
          </div>  
              <div  class="caraterics">
            <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/parking-lot.svg" alt="">
            <p> 2 parqueadores</p>
          </div>  
           <hr></hr>
           <div class="caract">
             <div class="caract-one">
               <p>Características</p>
               <ul>
                 <li>Estrato: 3</li>
                 <li>Tipo Cocina: Independiente</li>
                 <li>Zona Lavanderia</li>
                 <li>Tipo Pisos: Cerámica</li>
                 <li>Tipo Estufa: Mixta</li>
                  <li>Tipo Calentador: Gas</li>
                   <li>Electrodomésticos: Estufa</li>
                    <li>Vista: Interior</li>
                  <li>Vigilancia: No tiene</li>
              </ul>
            </div>
            <div class="caract-two">
              <p>Cerca</p>
              <ul>
                <li>Estrato: 3</li>
                <li>Tipo Cocina: Independiente</li>
                <li>Zona Lavanderia</li>
                <li>Tipo Pisos: Cerámica</li>
                <li>Tipo Estufa: Mixta</li>
                <li>Tipo Calentador: Gas</li>
                <li>Electrodomésticos: Estufa</li>
                <li>Vista: Interior</li>
                <li>Vigilancia: No tiene</li>
              </ul>
            </div>
            
          </div>
          <hr></hr>
          <div class="gastos">
            <p style="font-weight:bold;">Gastos Mensuales</p>
            <div class="more-info">
              <div class="propiedad">
                <p>Canon Mensual</p>
                <p  style="font-weight:bold;">$1.200.000</p>
              </div>
               <div class="propiedad">
                <p>Administración</p>
                <p  style="font-weight:bold;">$0</p>
              </div>
                <div class="propiedad">
                <p>Luz</p>
                <p  style="font-weight:bold;">$66</p>
              </div>
                <div class="propiedad">
                <p>Gas Natural</p>
                <p  style="font-weight:bold;">$17.036</p>
              </div>
                <div class="propiedad">
                <p>Acueducto</p>
                <p  style="font-weight:bold;">$65</p>
              </div>
                <div class="propiedad">
                <p>Telefonía/Internet</p>
                <p  style="font-weight:bold;">$132</p>
              </div>
            </div>
          </div>
          <div class="divide"></div>
          <div class="re">
          <h4>TOTAL</h4>
          <p>gastos</p>
          <p>mensuales</p>
               <p>$1.997.975</p>
          </div>
          <hr></hr>
        </div>
        </div>

</div> -->
      </div>
          <div class="buttons buttons-1">

            <?php
            $host= $_SERVER["HTTP_HOST"];
              $url= $_SERVER["REQUEST_URI"];
              $actual_link =  "http://" . $host . $url;
              $message = "Hola! Me interesa este inmueble, ¿Me puedes brindar información, por favor? ";
              $message = str_replace(" ", "%20", $message); 
              $wa_link = "https://wa.me/573008684986?text=" . $message . "%20" . $actual_link;

            ?>

            <a href="<?php echo $wa_link ?> " target="_blank">
           <div class="button button-1"> Visítalo</div></a>
         </div>
  </section>


<script>
    $(document).ready(function () {
      console.log('ready')
      // var ID = '3474653000020233661'
       var ID = location.search.slice(1).split("&")[0].split("=")[1];

      // var ID = '3474653000017583080'
      var data = {
        authtoken: '034d2711716cb3cbfe88099c5f47beba',
        zc_ownername: 'nube_dinamica',
        scope: 'creatorapi',
        criteria: `(ID==${ID})`,
      }

      function renderDetail(property) {

      var html = ` <div class="content-product">
                    <h3 class="price">${property['Valor_arriendo']}</h3>
                    <h4>Apartamento en Arriendo</h4>
                    <hr></hr>
                    <div class="info-place">
                    <h4 class="price">${property['Ciudad']}</h4>
                      <h4 class="price">${property['C_digo']}</h4>
                    </div>
                    <div class="slider-for" >
                      <div class="item" >
                        ${property['Imagen_2']} 
                      </div>
                      <div class="item">
                        ${property['Imagen_1']} 
                      </div>
                      <div class="item">
                        ${property['Imagen_3']} 
                      </div>
                       <div class="item">
                        ${property['Imagen_4']} 
                      </div>
                       <div class="item">
                        ${property['Imagen_5']} 
                      </div>
                       <div class="item">
                        ${property['Imagen_6']} 
                      </div>
                       <div class="item">
                        ${property['Imagen_7']} 
                      </div>
                       <div class="item">
                        ${property['Imagen_8']} 
                      </div>
                       <div class="item">
                        ${property['Imagen_9']} 
                      </div>
                       <div class="item">
                        ${property['Imagen_10']} 
                      </div>
                    </div>
                     <div class="slider-nav" >
                      <div class="item item2" >
                        ${property['Imagen_2']} 
                      </div>
                      <div class="item  item2">
                        ${property['Imagen_1']} 
                      </div>
                      <div class="item  item2">
                        ${property['Imagen_3']} 
                      </div>
                       <div class="item  item2">
                        ${property['Imagen_4']} 
                      </div>
                       <div class="item  item2">
                        ${property['Imagen_5']} 
                      </div>
                       <div class="item  item2">
                        ${property['Imagen_6']} 
                      </div>
                       <div class="item  item2">
                        ${property['Imagen_7']} 
                      </div>
                       <div class="item  item2">
                        ${property['Imagen_8']} 
                      </div>
                       <div class="item  item2">
                        ${property['Imagen_9']} 
                      </div>
                       <div class="item  item2">
                        ${property['Imagen_10']} 
                      </div>
                    </div>
                  </div>
                  <div class="content-product1">
                    <div class="detail">
                      <div  class="caraterics">
                        <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/bed.svg" alt="">
                        <p> 3 habitaciones</p>
                      </div>  
                          <div  class="caraterics">
                        <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/bathroom.svg" alt="">
                        <p> ${property['Ba_os']} baños</p> 
                      </div>  
                          <div  class="caraterics">
                        <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/house.svg" alt="">
                        <p>${property['A_o_construcci_n']} año</p>
                      </div>  
                          <div  class="caraterics">
                        <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/tape-measure.svg" alt="">
                        <p>${property['M2']}</p>
                      </div>  
                          <div  class="caraterics">
                        <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/area (1).svg" alt="">
                        <p> $13,636/m²</p>
                      </div>  
                          <div  class="caraterics">
                        <img style="" src="<?php echo get_template_directory_uri(); ?>/assets/img/parking-lot.svg" alt="">
                        <p> ${property['Parqueaderos']} parqueadores</p>
                      </div>  
                      <hr></hr>
                      <div class="caract">
                        <div class="caract-one">
                          <p>Características</p>
                          <ul>
                            <li>Estrato: ${property['Estrato']}</li>
                            <li>Tipo Cocina: ${property['Topo_cocina']} </li>
                            <li>Zona Lavanderia: ${property['Zona_lavanderia']} </li>
                            <li>Tipo Pisos: ${property['Tipo_pisos']} </li>
                            <li>Tipo Estufa: ${property['Tipo_estufa']}</li>
                              <li>Tipo Calentador: ${property['Tipo_calentador']}</li>
                                <li>Vista Panorámica: ${property['Vista_panoramica']} </li>
                              <li>Vigilancia: ${property['Vigilancia']}</li>
                          </ul>
                        </div>
                        <div class="caract-two">
                          <p>Cerca</p>
                          <ul>
                            <li>Jardines y Colegios: ${property['Jardin']}</li>
                            <li>Parques: ${property['Parqueadero_visitantes']}  </li>
                            <li>Alcobas: ${property['Alcobas']} </li>
                            <li>Balcon: ${property['Balc_n']} </li>
                            <li>Gas domiciliario: ${property['Gas_domiciliario']} </li>
                            <li>Permite Mascotas: ${property['Permite_mascota']} </li>
                          </ul>
                        </div>
                      </div>
                      <hr></hr>
                      <div class="gastos">
                        <p style="font-weight:bold;">Gastos Mensuales</p>
                        <div class="more-info">
                          <div class="propiedad">
                            <p>Canon Mensual</p>
                            <p  style="font-weight:bold;">$1.200.000</p>
                          </div>
                          <div class="propiedad">
                            <p>Administración</p>
                            <p  style="font-weight:bold;">$0</p>
                          </div>
                            <div class="propiedad">
                            <p>Luz</p>
                            <p  style="font-weight:bold;">$66</p>
                          </div>
                            <div class="propiedad">
                            <p>Gas Natural</p>
                            <p  style="font-weight:bold;">$17.036</p>
                          </div>
                            <div class="propiedad">
                            <p>Acueducto</p>
                            <p  style="font-weight:bold;">$65</p>
                          </div>
                            <div class="propiedad">
                            <p>Telefonía/Internet</p>
                            <p  style="font-weight:bold;">$132</p>
                          </div>
                        </div>
                      </div>
                      <div class="divide"></div>
                      <div class="re">
                      <h4>TOTAL</h4>
                      <p>gastos</p>
                      <p>mensuales</p>
                          <p>$1.997.975</p>
                      </div>
                      <hr></hr>
                    </div>
                    </div>
                `
      var detalleContainer = $('#detalle-container');
      detalleContainer.append(html)
    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
      asNavFor: '.slider-nav',
      responsive: [
            {
                breakpoint: 700,
                settings: {
                    arrows: false,
                
                }
            }
        ]
      });
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  arrows: false,
  focusOnSelect: true

});
    }

      function callapi() {
        $.ajax({
          dataType: 'jsonp',
          method: 'GET',
          url: 'https://creator.zoho.com/api/json/inmuebles/view/Inmuebles_Report',
          data: data,
          success: function (response) {
            var detalleContainer = $('#detalle-container');
            detalleContainer.html('')
            var filteredData = []

            const data = response['Inmuebles']

            console.log('filter', data[0])
            var property = data[0]
              renderDetail(property)
            // if property{
            //   renderDetail(property)
            // }
            // else{

            // }
          },
          error: function (error) {
            console.log(error.statusText);
          },
       });  
      }
      callapi();
    });


    </script>

    <style>
      .content-information{
        height: max-content;
        padding-bottom: 100px;
      }

      .content-product1{
        width: 100%;
      }

      .item img{
        width: 100%;
        height: 500px;
        object-fit: contain;
      }

      .item2 img{
          width: 100%;
    height: 100px;
    object-fit: cover;
      }
    </style>
  <?php get_footer(); ?>
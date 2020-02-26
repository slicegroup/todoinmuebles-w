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
  
  <section class="content-information">
    <div class="title-banner">
      <div class="todoin div-form" >
         <form class="filtro" id="filtro" name="filtro">
          <div class="selectop">
            <label for="ubicacion">
              Ubicación </label>
              <select onchange="ShowSelected();" name="ubicacion" id="ubication" tabindex="-1" aria-hidden="true">
                <option value=""></option>
                <option value="Medellín -Antioquia">Medellín -Antioquia </option>
                <option value="Barranquilla">Barranquilla</option>
                <option value="Bogotá">Bogotá</option>
              </select>
             </div>

          <div class="selectop">
            <label for="tipo">
              Tipo </label>
              <select onchange="ShowSelected();" name="tipo" id="tipo" tabindex="-1" aria-hidden="true">
                <option value=""></option>
                <option value="Apartamento"> Apartamento</option>
                <option value="Local">Local</option>
                <option value="Casa">Casa</option>
                <option value="Casa">Oficina</option>
                <option value="Lote">Lote</option>
              </select>
          </div>

          <div class="selectop">
            <label for="negocio">
              Estado </label>
              <select onchange="ShowSelected();" name="negocio" id="estado" data-select2-id="select-property-type" tabindex="-1" aria-hidden="true">
                <option value=""></option>
                <option value=" Alquiler">Para arriendo</option>
                <option value="Venta">Para la venta</option>
              </select>
          </div>
          <div class="selectop">
            <label for="estrato">
              Estrato </label>
              <select onchange="ShowSelected();" name="estrato" id="estrato" data-select2-id="select-status" tabindex="-1" aria-hidden="true">
                <option value=""></option>

                <option value="3">3</option>
                <option value="6">6</option>
              </select>
          </div>

          <div class="selectop">
            <label for="precio">
              Precio</label>
              <select name="precio" id="precio" class="selectop goog-te-combo" data-select2-id="select-min-price" tabindex="-1"
                aria-hidden="true">
                <option value=""></option>
                <option value="300000"> Menor a $300,000</option>
                <option value="$900,000"> Menor a $ 900,000 </option>
                <option value="1200000">Menor a $1,200,000</option>
                <option value="2000000"> Menor a $ 2,000,000</option>
                <option value="2500000">Mayor a $2,500,000</option>
              </select>
          </div>
          <!-- <div class="selectop">
            <label for="precio">
              Asc</label>
              <select name="precio" id="ascensor" class="selectop goog-te-combo"  tabindex="-1"
                aria-hidden="true">
                <option value=""></option>
                <option value="Si"> Si</option>
                <option value="No">No</option>
              </select>
          </div> -->
          <div class="selectop">
            <label for="area">
              Área (m²) </label>
              <select onchange="ShowSelected();" name="metros" id="metros" tabindex="-1" aria-hidden="true">
                <option value=""></option>
                <option value="63"> 63 </option>
                <option value="67"> 67 </option>
                <option value="55"> 55 </option>
                <option value="90"> 90 </option>
                <option value="90"> 100 </option>
              </select>
             </div>


            <div class="selectop">
              <label for="antiguedad">
                Antigüedad </label>
                <select onchange="ShowSelected();" name="anti" id="anti" tabindex="-1" aria-hidden="true">
                  <option value=""></option>
                  <option value="1">1 </option>
                  <option value="1987">1987</option>
                  <option value="2010">2010</option>
                </select>
            </div>

            <div class="selectop" id="want" >
              <label for="want">
               Lo quiero con </label>
            <div  class="selectBox"   tabindex="-1" aria-hidden="true" onclick="showCheckboxes()" >
              <select>
                <option></option>
              </select>
              <div class="overSelect"></div>
            </div>
            <div id="checkboxes" class="c"  >
              <label for="one">
                <input value="Si" name="ascensor[]" type="checkbox" id="Ascensor" /> Ascensor
               </label>
                <label for="two">
                  <input value="Si" type="checkbox" id="vigilancia" /> Vigilancia
               </label>
                <label for="three">
                  <input value="No" type="checkbox" id="Piscina" /> Piscina
                 </label>
                  <label for="four">
                    <input value="No" type="checkbox" id="saloncomunal" /> Salon Comunal
                  </label>
                     <label for="six">
                    <input value="Si " type="checkbox" id="gas" /> Gas domiciliario
                  </label>
                    <label for="seven">
                    <input value="Si" type="checkbox" id="zona" /> Zona Lavanderia
                  </label>
                </select>
            </div>
      </form>
    </div>
  </div>
  <div class="todoin-serv" id="properties-container" >
    <!-- <div class="file-two">
      <div class="">
        <img style=" width: 300px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/news-post-7-680x510.jpg" alt="">
      </div>
      <div class="card-body">
        <h5>Medellín</h5>
        <p>Disfrute de la cercanía a
          <br> todos los ligares principales
          <br>del centro de la ciudad
          <br>
          <span style="color: #74ee15" "font-size: 22px">
            $825.000</span>
        </p>
      </div>
    </div> -->

     <!-- <div class="file-two">
        <div class="img-card">
          <img style=" width: 300px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/news-post-7-680x510.jpg" alt="">
        </div>
        <div class="card-body two-card">
          <span style="color: #021639; font-size: 22px; font-weight:bold;">
            $825.000</span>
          <h6>Castropol - Medellín</h6>
          <div class="carac">
            <div>2 hab</div>
            <div>2 baños</div>
            <div>54m²</div>
          </div>
        </div>
      </div> -->
    </div>
    <div id="no-result">
      <span class="search">Selecciona tu</span> <h1 class="search">búsqueda</h1>
    </div>
  </section>

  <script>
    $(document).ready(function () {
      console.log('ready')
      var ubication = ''
      var tipo = ''
      var estado = ''
      var estrato = ''
      var precio = ''
      var metros = ''
      var anti = ''
      var want = ''
      var Ascensor = ''
      var piscina = ''
      var saloncomunal = ''
      var zona = ''

            $('#ubication').change(function() {
              ubication = $(this).val()
              renderCards()
            })

            $('#tipo').change(function() {
              tipo = $(this).val()
              renderCards()
            })

            $('#estado').change(function() {
              estado = $(this).val()
              renderCards()
            })

              $('#estrato').change(function() {
              estrato = $(this).val()
              renderCards()
            })

            $('#precio').change(function() {
              precio = $(this).val()
              renderCards()
            })

            $('#metros').change(function() {
              metros = $(this).val()
              renderCards()
            })

            $('#anti').change(function() {
              anti = $(this).val()
              renderCards()
            })

            $('#Ascensor').change(function() {
              var check = $("#Ascensor:checked")[0];
              Ascensor = check ? $(this).val() : ''
              renderCards()
            })

            $('#piscina').change(function() {
              var check = $("#piscina:checked")[0];
              piscina = check ? $(this).val() : ''
              renderCards()
            })

            $('#gas').change(function() {
              var check = $("#gas:checked")[0];
              gas = check ? $(this).val() : ''
              renderCards()
            })

            $('#zona').change(function() {
              var check = $("#zona:checked")[0];
              zona = check ? $(this).val() : ''
              renderCards()
            })

      function renderCards() {

        var data = {
          authtoken: '034d2711716cb3cbfe88099c5f47beba',
          zc_ownername: 'nube_dinamica',
          scope: 'creatorapi'
        }

        $.ajax({
          dataType: 'jsonp',
          method: 'GET',
          url: 'https://creator.zoho.com/api/json/inmuebles/view/Inmuebles_Report',
          data: data,
 
          success: function (response) {
            var propertiesContainer = $('#properties-container');
            propertiesContainer.html('')
            var filteredData = []

            const data = response['Inmuebles']
            console.log(data)

            if (ubication != '') {
              filteredData = data.filter(function(e) {
                return e['Ciudad'] == ubication
              })
            }

            if (tipo != '') {
              filteredData = data.filter(function(e) {
                return e['Tipo'] == tipo
              })
            }

            if (estado != '') {
              filteredData = data.filter(function(e) {
                return e['Estado'] == estado
              })
            }

            if (estrato != '') {
              filteredData = data.filter(function(e) {
                return e['Estrato'] == estrato
              })
            }

            if (precio != '') {
              filteredData = data.filter(function(e) {
                return e['Valor_arriendo'] < $(this).val();
              })
            }
            //    if (precio != '') {
            //   filteredData = data.filter(function(e) {
            //     return e['Valor_arriendo'] == precio
            //   })
            // }

            if (metros != '') {
              filteredData = data.filter(function(e) {
                return e['M2'] == metros
              })
            }

            if (anti != '') {
              filteredData = data.filter(function(e) {
                return e['A_o_construcci_n'] == anti
              })
            }

            if (Ascensor === 'Si') {
              filteredData = data.filter(function(e) {
                return e['Ascensor'] == Ascensor
              })
            }

            if (piscina === 'No') {
              filteredData = data.filter(function(e) {
                return e['pisicina'] == piscina
              })
            }

            if (saloncomunal === 'No') {
              filteredData = data.filter(function(e) {
                return e['Sal_n_comunal'] == saloncomunal
              })
            }

            if (gas === 'Si') {
              filteredData = data.filter(function(e) {
                return e['Gas_domiciliario'] == gas
              })
            }

            if (zona === 'Si') {
              filteredData = data.filter(function(e) {
                return e['Zona_lavanderia'] == zona
              })
            }

          


            console.log('filter', filteredData)
            if (filteredData.length != 0) {
              $("#no-result").hide();
            } else {
              $("#no-result").show();
            }

            filteredData.map(function(property) {
              console.log('property', property)
              renderProperty(property)
            })
          },
          error: function (error) {
            console.log(error.statusText);
          },
       });   
    }  

    });


    function renderProperty(property) {
      var html = `<a href="<?php echo bloginfo('url').'/index.php/detalle/?id=${property.ID}';  ?> "target="_blank">
                  <div class="file-two">
                  <div class="img-card">
                      ${property['Imagen_2']}
                    </div>
                    <div class="card-body two-card">
                     <span style="color: #021639; font-size: 22px; font-weight:bold;">
                      ${property['Valor_arriendo']}
                      </span>
                      <h6>${property['Ciudad']}</h6>
                        <div class="carac">
                        <div>2 hab</div>
                        <div>${property['Ba_os']}</div>
                        <div>${property['M2']}m²</div>
                        <div style="display:none;">${property['A_o_construcci_n']}</div>
                        <div style="display:none;">${property['Ascensor']}</div>
                        <div style="display:none;">${property['Vigilancia']}</div>
                        <div style="display:none;">${property['pisicina']}</div>
                        <div style="display:none;">${property['Sal_n_comunal']}</div>
                        <div style="display:none;">${property['Gas_domiciliario']}</div>
                        <div style="display:none;">${property['Zona_lavanderia']}</div>
                        </div>
                        </div>
                    </div>
                `
      var propertiesContainer = $('#properties-container');
      propertiesContainer.append(html)

    }
  </script>
</body>
<style>
  .content-information{
    background-color: #fff;
    max-height: max-content!important;
    padding-bottom: 100px;
    height: max-content;
    min-height: 100vh;

  }
  .file-two img {
    width: 300px ; 
  }
  .card-body p {
    text-align: left;
    display: grid;
  }

  /* .card-body{
    width: 300px!important;
  } */


.multiselect {
  width: 200px;
}

.selectBox {
  position: relative;
}

.selectBox select {
    width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
      background: #021639;
    color: #fff!important;
}

#checkboxes label {
  display: block;
      display: block;
    color: #fff;
    font-weight: 300;
    padding: 0 10px;
}

</style>
<script>
var expanded = false;
function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded)  {
    checkboxes.style.display = "block";
    expanded = true;
 
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
</script>
<?php get_footer(); ?>
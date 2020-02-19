<?php get_header(); ?>
 <header class="header__main navbar-me container-fluid">
    <div class="cont-todo">
      <div class="logo">
        <a href="<?php bloginfo('url'); ?>/index.php/">
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

    
  </header>

  <section class="result">
       <div class="filtro two-filtro">
          <div class="selectop" data-get-location-placeholder="Any">
            <span class="rh_prop_search__selectwrap">
              <select name="location" id="location" data-select2-id="location" tabindex="-1" aria-hidden="true" value="Ubicacion">
                <option value="little-havana">Medellin</option>
                <option value="perrine">Barranquilla</option>
                <option value="doral">Bogotá</option>
              </select>
              <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1">
                <span class="selection">
                  <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                    aria-labelledby="select2-location-container">

                    <span class="select2-selection__arrow" role="presentation">
                      <b role="presentation"></b>
                    </span>
                  </span>
                </span>
                <span class="dropdown-wrapper" aria-hidden="true"></span>
              </span>
            </span>
          </div>

          <div class="selectop">
   
            <span class="rh_prop_search__selectwrap">
              <select name="status" id="select-status" data-select2-id="select-status" tabindex="-1" aria-hidden="true">

                <option value="commercial"> Apartamento</option>
                <option value="office">Terreno</option>
                <option value="shop">Casa</option>
              </select>
              <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3">
                <span class="selection">
                  <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                    aria-labelledby="select2-select-status-container">

                    <span class="select2-selection__arrow" role="presentation">
                      <b role="presentation"></b>
                    </span>
                  </span>
                </span>
                <span class="dropdown-wrapper" aria-hidden="true"></span>
              </span>
            </span>
          </div>

          <div class="selectop">
   
            <span class="rh_prop_search__selectwrap">
              <select name="type" id="select-property-type" data-select2-id="select-property-type" tabindex="-1" aria-hidden="true">
                <option value="commercial"> Alquiler</option>
                <option value="office">Venta</option>
                <option value="shop">Alquiler y Venta</option>
              </select>
              <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5">
                <span class="selection">
                  <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                    aria-labelledby="select2-select-property-type-container">

                    <span class="select2-selection__arrow" role="presentation">
                      <b role="presentation"></b>
                    </span>
                  </span>
                </span>
                <span class="dropdown-wrapper" aria-hidden="true"></span>
              </span>
            </span>
          </div>
          <div class="selectop">
     
            <span class="rh_prop_search__selectwrap">
              <select name="status" id="select-status" data-select2-id="select-status" tabindex="-1" aria-hidden="true">
                <option value="for-rent">Estrato</option>
                <option value="for-sale">2</option>
                <option value="for-rent">3</option>
                <option value="for-sale">4</option>
              </select>
              <span dir="ltr" data-select2-id="3">
                <span class="selection">
                  <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                    aria-labelledby="select2-select-status-container">

                    <span class="select2-selection__arrow" role="presentation">
                      <b role="presentation"></b>
                    </span>
                  </span>
                </span>
                <span class="dropdown-wrapper" aria-hidden="true"></span>
              </span>
            </span>
          </div>

          <div class="selectop">

            <span>
              <select name="min-price" id="select-min-price" class="selectop goog-te-combo" data-select2-id="select-min-price" tabindex="-1"
                aria-hidden="true">
                <option value="1000">Precio</option>
                <option value="5000">$5,000</option>
                <option value="10000">$10,000</option>
                <option value="50000">$50,000</option>
                <option value="100000">$100,000</option>
                <option value="200000">$200,000</option>
                <option value="300000">$300,000</option>
                <option value="400000">$400,000</option>
                <option value="500000">$500,000</option>
                <option value="600000">$600,000</option>
              </select>

            </span>
          </div> 


          <div class="selectop">

            <span>
              <select name="Ordenar" id="select-min-price" class="selectop goog-te-combo" data-select2-id="select-min-price" tabindex="-1"
                aria-hidden="true">
                <option value="1000">Ordenar</option>
                <option value="5000">$5,000</option>
                <option value="10000">$10,000</option>
                <option value="50000">$50,000</option>
                <option value="100000">$100,000</option>
                <option value="200000">$200,000</option>
                <option value="300000">$300,000</option>
                <option value="400000">$400,000</option>
                <option value="500000">$500,000</option>
                <option value="600000">$600,000</option>
              </select>

            </span>
          </div> 
              <a href="<?php bloginfo('url'); ?>/index.php/propiedades" class="send">
        <div class="button two-button">Buscar</div></div>
        </a> 
             </div> 
</section>
<section class="cards">
    <div class="card-in container">
      <div class="file-two">
        <div class="img-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news-post-7-680x510.jpg" alt="">
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
      </div>
      <div class="file-two">
        <div class="img-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news-post-7-680x510.jpg" alt="">
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
      </div>
      <div class="file-two">
        <div class="img-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news-post-7-680x510.jpg" alt="">
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
      </div>
 
    
  </section>

<style>
  body{
    background: #fff!important;
  }
  .responsive-menu-btn {
  width: 48px;
  overflow: visible;
  height: 48px;
  margin-left: auto;
  cursor: pointer;
  border: none;
  background: none;
  outline: none;
  position: relative;
    z-index: 99; }
  .responsive-menu-btn svg {
    position: absolute;
    top: 0;
    left: 0; }
    .responsive-menu-btn svg.open {
      visibility: visible;
      animation: XrotateScaleFadeInReverse 0.37s ease forwards; }
    .responsive-menu-btn svg.close {
      visibility: hidden;
      animation: XrotateScaleFadeOut 0.37s ease forwards; }
  .responsive-menu-btn > svg.open {
    width: 80%;
    height: auto;
    fill: white; }
  .responsive-menu-btn > svg.close {
    position: relative;
    top: 3px;
    width: 92%;
    height: auto;
    fill: white; }
  .responsive-menu-btn.--is-open svg.close {
    visibility: visible;
    animation: XrotateScaleFadeIn 0.37s ease forwards; }
  .responsive-menu-btn.--is-open svg.open {
    visibility: hidden;
    animation: XrotateScaleFadeOut 0.37s ease forwards; }

@media (min-width: 700px) {
  .responsive-menu-btn {
    display: inherit!important; } }
.nav__menu {
  position: fixed;
  display: flex;
  flex-direction: column;
  top: 0;
    background: #011638;
    left: 0;
  width: 100%;
    height: 40%;
  transform: translate(-100%, 0);
  transition: transform 0.2s linear;
 }
  .nav__menu.--is-open {
    transform: translate(0, 0);
      height: 100vh;
    padding: 30px; }
  .nav__menu > a {
    text-transform: uppercase;
    padding: 2rem;
    text-decoration: none;
    color: white;
    font-size: 15px;
 }

@media (min-width: 700px) {
  .nav__menu {
    display: flex;
    flex-direction: row;
    background: none;
    border-right: none;
    position: static;
    margin-left: auto;
     justify-content: space-around;
    height: auto;
    transform: translate(0, 0); }
    .nav__menu.--is-open {
      display: flex; } }
.page-wrapper {
  min-height: 100vh; }
  .page-wrapper:nth-child(1) {
    background: white; }
  .page-wrapper:nth-child(2) {
    background: #f2f2f2; }

@keyframes XrotateScaleFadeIn {
  0% {
    opacity: 0;
    transform: rotate(360deg) scale(0); }
  55% {
    opacity: 0.35;
    transform: rotate(360deg) scale(0.5); }
  100% {
    opacity: 1;
    transform: rotate(0deg) scale(1); } }
@keyframes XrotateScaleFadeInReverse {
  0% {
    opacity: 0;
    transform: rotate(-360deg) scale(0); }
  55% {
    opacity: 0.35;
    transform: rotate(-360deg) scale(0.5); }
  100% {
    opacity: 1;
    transform: rotate(0deg) scale(1); } }
@keyframes XrotateScaleFadeOut {
  0% {
    opacity: 1;
    transform: rotate(0deg) scale(1); }
  55% {
    opacity: 0.35;
    transform: rotate(360deg) scale(0.5); }
  100% {
    opacity: 0;
    transform: rotate(360deg) scale(0); } }
</style>

<?php get_footer(); ?>
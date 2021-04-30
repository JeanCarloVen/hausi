<!--Main Section-->
<section class="container  allvh  fixed-top"  id="home">
    <div class="item  ai-center  flex-auto  main">
        <article class="container  flex  flex-wrap">
            <div class="item  ph12  md8  flex-auto">
                <!--Texto-->
                <div>
                    <h1 class="f4  color-01">Tours virtuales para tu Inmobiliaria</h1>
                </div>
                <div class="p2">
                    <h3  class="color-01">Toda una nueva experiencia</h3>
                </div>
                <!--Boton "Beneficios"-->
                <a class="boton-beneficios" href="#ventajas">Beneficios</a>    
            </div>
            <aside class="item  ph12  md4  flex-auto">
                <!--Image-->
                <picture class="block  mauto">
                    <source class="figura-3d" srcset="<?=base_url?>assets/img/forma_3D.webp" media="(min-width:48em)">                
                    <img  src="<?=base_url?>assets/img/forma_3D.webp">               
                </picture>
            </aside>
            
        </article>
    </div>
</section>
<section  class="container  fixed-top  text-inicial">
<div class="item  ph12">
                <p class="m1  f2_5  sm-f3  md-f3  lg-f3  color-04">
                    TOUR 360°  +  NARRACIÓN  +  FOTO 
                </p>
                <p class="block  mauto  space-rectangule"> </p>
                <h2 class="m0  p0  f4  color-01">PROFESIONAL</h2>
            </div>
</section>

<!--Servicios-->
<section class="container-fluid  allvh  fixed-top  font-color-bk  servicio" id="servicios">
    <h1 class="f3  color-01">Servicios</h1>
    <div class="flex  flex-wrap">
        <div class="item  ph12  sm12  md6  lg6  m0  flex-auto">
            <div class="square-service  top-left">
                <h2 class="p1">Fotógrafo profesional</h2>
                <!--slider-->
                <picture>
                    <img class="square" src="<?=base_url?>assets/img/photoHouse.jpg">
                </picture>    
            </div>
        </div>
        <div class="item  ph12  sm12  md6  lg6  m0  flex-auto">
            <div class="square-service  top-right">
                <h2 class="p1">Tour Virtual</h2>
                <iframe title="Tour Virtual" src="https://housiproject.000webhostapp.com/output-5/index.html"></iframe>
            </div>
        </div>
        <div class="item  ph12  sm12  md6  lg6  m0  flex-auto">
            <div class="square-service  bottom-left">
                <h2 class="p1">Fotos 360°</h2>
                <div class="square">
                    <a-scene  embedded>
                        <a-assets>
                            <img id="panorama" src="https://c1.staticflickr.com/5/4302/35137573294_1287bfd0ae_k.jpg" crossorigin />
                        </a-assets>
                            <a-sky src="#panorama" rotation="0 -90 0"></a-sky>
                    </a-scene>
                </div>
            </div>
        </div>
        <div class="item  ph12  sm12  md6  lg6  m0  flex-auto">
            <div class="square-service  bottom-right">
                <h2 class="p1">Realidad Aumentada</h2>
                <iframe src="https://www.youtube.com/embed/UudV1VdFtuQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<!--Ventajas con Hausi-->
<section class="container  fixed-top  font-color-bk  ventajas" id="ventajas">
    <h1  class="f3  color-01">Beneficios</h1>
    <div class="container  flex  flex-wrap">
        <div class="item  ph12  sm6  md6  lg4  flex-auto">
            <div class="square-service  bottom-left  v-middle">
                <h2 class="p1">Likeable</h2>
                <picture class="ventajas-img-opc">
                    <img src="<?=base_url?>assets/img/like.png">
                </picture>
                <h1 class="item  ai-center  flex-auto  m1  f3">
                    Impacta a tus clientes
                </h1>
            </div>
        </div>
        <div class="item  ph12  sm6  md6  lg4  flex-auto">
            <div class="square-service  top-right">
                <h2 class="p1">Comodo</h2>
                <picture class="ventajas-img-opc">
                    <img src="<?=base_url?>assets/img/sofa.png">
                </picture>
                <h1 class="item  ai-center  flex-auto  f3">
                    Visita desde tu casa
                </h1>
            </div>
        </div>
        <div class="item  ph12  sm12  m12  lg4  flex-auto">
            <div class="square-service  top-left">
                <h2 class="p1">Increible</h2>
                <picture class="ventajas-img-opc">
                    <img src="<?=base_url?>assets/img/palomitas.svg">
                </picture>
                <h1 class="item  ai-center  flex-auto  f3">
                    Experiencias entretenidas 
                </h1>
            </div>
        </div>
    </div>
</section>
<!--Muestra de tu página-->
<section class="container   fixed-top   allvh  font-color-bk  ejem-site" id="tu_sitio">
    <h1 class="f3  m1  color-01" >Ejemplo de tu sitio</h1>
    <!--slider-->
    <!-- Place somewhere in the <body> of your page -->
    <div class="flexslider">
      <ul class="slides">
        <li>
            <img src="<?=base_url?>assets/img/photoHouse.jpg"/>
        </li>
        <li>
          <img src="<?=base_url?>assets/img/photoHouse.jpg" />
        </li>
        <li>
          <img src="<?=base_url?>assets/img/photoHouse.jpg" />
        </li>
        <li>
          <img src="<?=base_url?>assets/img/photoHouse.jpg" />
        </li>
        <li>
            <img src="<?=base_url?>assets/img/photoHouse.jpg"/>
        </li>
        <li>
          <img src="<?=base_url?>assets/img/photoHouse.jpg" />
        </li>
        <li>
          <img src="<?=base_url?>assets/img/photoHouse.jpg" />
        </li>
        <li>
          <img src="<?=base_url?>assets/img/photoHouse.jpg" />
        </li>
        <li>
            <img src="<?=base_url?>assets/img/photoHouse.jpg"/>
        </li>
        <li>
          <img src="<?=base_url?>assets/img/photoHouse.jpg" />
        </li>
        <li>
          <img src="<?=base_url?>assets/img/photoHouse.jpg" />
        </li>
        <li>
          <img src="<?=base_url?>assets/img/photoHouse.jpg" />
        </li>
        <!-- items mirrored twice, total of 12 -->
      </ul>
    </div>
    <div class="container  flex  ai-center  flex-wrap  detalles">
        <div class="item  ph12  md8  color-01  flex-auto  detalles-propiedad">
            <h1 class="f3">Casa PlayaBonita</h1>
            <h2 class="f2">$3,000,000.00 MX</h2>
            <h2>Negociable</h2>
            <h3>publicado hace 2 días</h3>
        </div>
        <!--Tarjeta-->
        <div class="item  ph12  md4  color-01  flex-auto  tarjeta">
            <div class="item  tarjeta-content  f0">
                <div class="item">
                    <a class="boton-beneficios" href="https://sensacionweb.com/">Visita el inmueble</a>    
                    <br>
                    <a class="" href="https://sensacionweb.com/">Realidad Aumentada</a>    
                </div>
                <!--QR-->
                <div class="item ">
                    <picture>
                        <img src="<?=base_url?>assets/img/qr.webp" style="width: 30%">
                    </picture>
                </div>
            </div>
        </div>
    </div>
    <div class="container  flex  flex-wrap   color-01  detalles-generales">
        <div class="item  ph12  color-01">
            <h2>Detalles Generales</h2>
        </div>
        <div class="item  ph6  md6  sm12  flex-auto">
            <h3 class="p2">Recamas: 5</h3> 
            <h3 class="p2">Baños: 3</h3> 
        </div>
        <div class="item  ph6  md6  sm12  flex-auto">
            <h3 class="p2">Estacionamientos: 2</h3> 
            <h3 class="p2">Terreno: 250 m2</h3> 
        </div>    
    </div>
    <div class="container  flex  flex-wrap   color-01  detalles-generales">
        <div class="item  ph12">
            <h2>Descripción</h2>
        </div>
        <div class="item  ph12  flex-auto">
            <p class="p1  left">
                Ideal para familias con niños, ya que cuenta con parques y grandes centros de esparcimientos. Cuenta también con dos avenidas que conectan con tres vías principales, que aseguran una llegada rápida a los centros financieros y de alto impacto de la ciudad.
                Somos un nuevo concepto para cubrir todas las necesidades, y desarrollamos inmuebles para las familias Mexicanas que desean un alto valor por su inversión en la compra de un inmueble.
                En Kuri inmobiliaria creemos en altos estándares de construcción y sobre todo en altos niveles de vida.
            </p> 
        </div>
    </div>
    <div class="container  flex  flex-wrap   color-01  detalles-generales">
        <div class="item  ph12">
            <h2>Ubicación</h2>
        </div>
        <div class="item  ph12  flex-auto">
            <p class="p1">
                Exclusivo Desarrollo ubicado a las afueras de la ciudad. 
            </p>
            <div class="item ">
                    <picture>
                        <img src="<?=base_url?>assets/img/mapaHausi.webp" style="width: 30%">
                    </picture>
            </div>
        </div>
    </div>
    <div class="container  flex  flex-wrap   color-01  detalles-generales">
        <div class="item  ph12">
            <h2>Recorrido 360°</h2>
        </div>
        <div class="item  ph12  flex-auto">
            <p class="p1">
                Exclusivo Desarrollo ubicado a las afueras de la ciudad. 
            </p>
            <div class="item ">
                <iframe title="Tour Virtual" src="https://housifiles.000webhostapp.com/Web/CnRetoque/index.html"></iframe>
            </div>
        </div>
    </div>
</section>
<!--Cotizador-->
<section class="container  fixed-top  font-color-bk  cotizador" id="cotizador">
    <h1 class="f3  m1  color-01">Cotizador Rápido</h1>
    <div class="container  flex  flex-wrap  ai-center  jc-center">
        <div class="item cotizador-box">
            <a class="f4  font-color-bk" href="<?=base_url?>user/cotizador">Click</a>  
    </div>
</div>
</section>




<!--REPENSAR PALETA DE COLORES-->

<!--Seleccionar 5 colores-->

<!--Paleta A:
#687A8F
#71A682
#8A8866
#76697A
#C7A69E-->


<!--Paleta B:
#DB2A94
#8987ED
#DED652
#4DFF7E-->



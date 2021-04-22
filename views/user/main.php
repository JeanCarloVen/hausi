<!--Main Section-->
<section class="container  allvh  fixed-top">
    <div class="item  ai-center  flex-auto  main">
        <article class="container  flex  flex-wrap">
            <div class="item  ph12  md8  flex-auto">
                <!--Texto-->
                <div>
                    <h1 class="f4  font-color">Tours virtuales para tu Inmobiliaria</h1>
                </div>
                <div class="p2">
                    <h3  class="font-color">Toda una nueva experiencia</h3>
                </div>
                <!--Boton "Beneficios"-->
                <a class="boton-beneficios" href="https://sensacionweb.com/">Beneficios</a>    
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
<!--Servicios-->
<section class="container-fluid  allvh  fixed-top  servicio" id="servicio">
    <h1>Servicios</h1>
    <div class="flex  flex-wrap">
        <div class="item  ph12  sm6  md6  lg6  m0  flex-auto">
            <div class="square-service  top-left">
                <h2 class="p1">Fotógrafo profesional</h2>
                <!--slider-->
                <picture>
                    <img class="square" src="<?=base_url?>assets/img/photoHouse.jpg">
                </picture>    
            </div>
        </div>
        <div class="item  ph12  sm6  md6  lg6  m0  flex-auto">
            <div class="square-service  top-right">
                <h2 class="p1">Tour Virtual</h2>
                <iframe title="Tour Virtual" src="https://housiproject.000webhostapp.com/output-5/index.html"></iframe>
            </div>
        </div>
        <div class="item  ph12  sm6  md6  lg6  m0  flex-auto">
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
        <div class="item  ph12  sm6  md6  lg6  m0  flex-auto">
            <div class="square-service  bottom-right">
                <h2 class="p1">Realidad Aumentada</h2>
                <iframe src="https://www.youtube.com/embed/UudV1VdFtuQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<!--Ventajas con Hausi-->
<section class="container  allvh  fixed-top  ventajas" id="ventajas">
    <h1>Ventajas</h1>
    <div class="container  flex  flex-wrap">
        <div class="item  ph12  sm6  md6  lg4  flex-auto">
            <div class="square-service  bottom-left  v-middle">
                <h2 class="p1">Impactante</h2>
                <h4 class="">
                    Impacta a tus clientes con el uso de estas nuevas teclogías inmersivas
                </h4>
            </div>
        </div>
        <div class="item  ph12  sm6  md6  lg4  flex-auto">
            <div class="square-service  top-right">
                <h2 class="p1">Deslumbrante</h2>
                <h4>
                    Desde la comodidad de su casa tus clientes conocerán tus inmuebles
                </h4>
            </div>
        </div>
        <div class="item  ph12  sm12  m12  lg4  flex-auto">
            <div class="square-service  top-left">
                <h2 class="p1">Increible</h2>
                <h4>
                    Experiencias entretenidas para tus clientes
                </h4>
            </div>
        </div>
    </div>
</section>
<!--Cotiza Ahora-->
<section class="container  allvh  fixed-top  cotizador" id="cotizador">
    <h1>Cotizador</h1>
</section>

<footer>
    <!--Datos del Negocio-->
</footer>

<script src="<?=base_url?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?=base_url?>assets/js/myscripts.js"></script>
</body>
</html>
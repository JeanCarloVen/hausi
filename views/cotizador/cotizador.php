<section class="container  allvh  fixed-top  cotizador-site" id="cotizador-site">
    <h1 class="f3  m1  color-01">Cotizador del Tour Virtual</h1>
    <div class="container  flex  flex-wrap  center">
        <!--mapa de cobertura-->
        <img class="item  ph12  sm6  md6  lg5  m1  border-cotizador  mapHausi  flex-auto" src="<?=base_url?>assets/img/mapHausi.png" alt="Mapa de Hausi">
        <!-- Vista Lateral--> 
        <aside class="item  ph12  sm6  md6  lg7  m1  border-cotizador  left  flex-auto">
            <form class="color-04" action="<?=base_url?>user/cotizador_calc" method="POST">
            <h2> Seleccione la Zona</h2>
            <select name="zona">
                <option value="0">Seleccione..</option> 
                <option value="1">Norte</option> 
                <option value="2">Sur</option>
                <option value="3">Oriente</option>
                <option value="4">Poniente</option> }
            </select>    
            <br><br>
            <h2> Selecciona el número espacios cerrados</h2>            
            <select name="numEspaciosCerrados">
                <option value="0">Seleccione..</option> 
                <option value="1">1</option> 
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option> 
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option> 
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option> 
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option> 
                <option value="14">14</option>
                <option value="15">15</option>
            </select>
            <br><br>
            <h2> Selecciona el número de espacios abiertos</h2>
            <select name="numEspaciosAbiertos">
                <option value="0">Seleccione..</option> 
                <option value="1">1</option> 
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option> 
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option> 
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="9">10</option>
                <option value="9">11</option>
                <option value="9">12</option>
                <option value="9">13</option>
                <option value="9">14</option>
                <option value="9">15</option>
            </select>
            <br><br>
            <input type="submit" value="cotizar">
        </form>
        <br><br>
        <h2 class="color-01"><?php echo isset($importeFormat) ? "Precio sólo del tour virtual* : $ ".$importeFormat : ''; ?></h2>
        <div class="color-04">
            <br>
            <h6>Espacios cerrados son habitaciones, pasillos, cuartos de estudio, cocinas, etc. </h6>
            <h6>Espacios abiertos son jardines, patios, techos, azoteas, etc</h6>
            <h6>*El precio no considera fotos, fotos 360°, narración e implementación AR</h6>
        </div>
        </aside>
    </div>
    <h3 class="m1  font-color">Agrega al tour fotos y narración profesional y obtén hasta un 20% descuento</h3>
    <!--agregar enviar cotización y datos de contacto-->
    <form class="container  flex  ai-center  flex-wrap  color-04  form-cotizacion" action="../" form="">
        <label class="item  ph6 sm6  md6  lg6  flex-auto" for="narracion">Narración</label>
        <input class="item  ph6 sm6  md6  lg6  flex-auto" type="checkbox" value="first_checkbox">
        <label class="item  ph6 sm6  md6  lg6  flex-auto" for="fotosHD">Fotos HD</label>
        <input class="item  ph6 sm6  md6  lg6  flex-auto" type="checkbox" value="second_checkbox">
        <label class="item  ph6 sm6  md6  lg6  flex-auto" for="fotosHD">Fotos 360°</label>
        <input class="item  ph6 sm6  md6  lg6  flex-auto" type="checkbox" value="second_checkbox">
        <label class="item  ph6 sm6  md6  lg6  flex-auto" for="fotosHD">Realidad Aumentada</label>
        <input class="item  ph6 sm6  md6  lg6  flex-auto" type="checkbox" value="second_checkbox">
        
        <div class="item  ph12 sm12  md12  lg12  flex-auto" >
            <label for="name">Nombre</label>
        </div>
        <div class="item  ph12 sm12  md12  lg12  p0  flex-auto" >
            <input class="input_cotizacion" type="text" name="name">
        </div>
        <div class="item  ph12 sm12  md12  lg12   flex-auto" >
            <label for="mail">Correo</label>
        </div>
        <div class="item  ph12 sm12  md12  lg12  p0  flex-auto" >
            <input class="input_cotizacion" type="email" name="mail">
        </div>
        
        <div class="item  ph12 sm12  md12  lg12  flex-auto" >
            <label for="phone">Teléfono</label>
        </div>
        <div class="item  ph12 sm12  md12  lg12  p0  flex-auto" >
            <input class="input_cotizacion" type="tel" name="phone">
        </div>
        <div class="item  ph12 sm12  md12  lg12  flex-auto" >
            <label for="phone">Precio del Tour</label>
        </div>
        <div class="item  ph12 sm12  md12  lg12  p0  flex-auto" >
            <input class="input_cotizacion" type="text" readonly="readonly" name="precio_tour" value="<?php  echo isset($importeFormat) ? " $ ".$importeFormat : ''; ?>">
        </div>
        <div class="item  ph12 sm12  md12  lg12  flex-auto" >
            <label for="msj">Mensaje</label>
        </div>
        <div class="item  ph12 sm12  md12  lg12  p0  flex-auto" >
            <textarea class="input_cotizacion" name="msj" placeholder="Escríbenos..."></textarea>
        </div>
        <div class="item  ph12 sm12  md12  lg12  p2  button_submit  flex-auto" >
            <input class=""  input_cotizacion" type="submit" value="Enviar Cotización">
        </div>
    </form>
    <h3 class="m2  font-color">En menos de 2 horas nos pondremos en contacto contigo para dar seguimiento o márcanos al 55-70-74-15-16</h3>
</section>

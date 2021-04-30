<!-- Lógica --> 
<?php
    $importe = '';
    if($_POST){
        if($_POST['zona'] != 0 && $_POST['numHabitaciones'] != 0 && $_POST['numEspaciosAbiertos'] != 0){
                //Precios por zona
                $zona= $_POST['zona'];
                //Numero de espacios cerrados;
                $numHab = $_POST['numEspacios cerrados'];
                $precioHab = 800;

                //Numero de Espacios Abiertos;
                $numEsp = $_POST['numEspaciosAbiertos'];
                $precioEsp = 200;

                //Selección de la zona
                switch ($zona) {
                case 1:
                    //echo "ZONA NORTE";
                    $precioZona = 340;
                    break;
                case 2:
                    //echo "ZONA SUR";
                    $precioZona = 300;
                    break;
                case 3:
                    //echo "ZONA ORIENTE";
                    $precioZona = 150;
                    break;
                case 4:
                    //echo "ZONA PONIENTE";
                    $precioZona = 240;
                    break;
                case 5:
                    //echo "ZONA CENTRO";
                    $precioZona = 320;
                    break;
                }

               //Importe = (Precio por zona) + (Numero de habitaciones)*(Precio por habitación)
               $importe = $precioZona + $numHab*$precioHab +$numEsp*$precioEsp;
               $importeFormat = number_format($importe, 2,'.', ',');
        }
    }    
?>
<section class="container  allvh  fixed-top  cotizador-site" id="cotizador-site">
    <h1 class="f3  m1  font-color">Cotizador del Tour Virtual</h1>
    <div class="container  flex  flex-wrap  center">
        <!--mapa de cobertura-->
        <img class="item  ph12  sm6  md6  lg5  m1  border-cotizador  mapHausi  flex-auto" src="<?=base_url?>assets/img/mapHausi.png" alt="Mapa de Hausi">
        <!-- Vista Lateral--> 
        <aside class="item  ph12  sm6  md6  lg7  m1  border-cotizador  left  flex-auto">
        <form action="" method="POST">
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
            <select name="numHabitaciones">
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
        <?php echo isset($importeFormat) ? "Importe sólo del tour virtual* : $ ".$importeFormat : ''?>
        <div>
            <h6>Espacios cerrados son habitaciones, pasillos, cuartos de estudio, cocinas, etc. </h6>
            <h6>Espacios abiertos son jardines, patios, techos, azoteas, etc</h6>
            <h6>*El importe no considera fotos, fotos 360°, narración e implementación AR</h6>
        </div>
        </aside>
    </div>
    <h3 class="m1  font-color">Agrega al tour fotos y narración profesional</h3>
</section>

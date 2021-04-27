<!-- Lógica --> 
<?php
    $importe = '';
    if($_POST){
        if($_POST['zona'] != 0 && $_POST['numHabitaciones'] != 0 && $_POST['numEspaciosAbiertos'] != 0){

                //Precios por zona
                $zona= $_POST['zona'];
                //Numero de habitaciones;
                $numHab = $_POST['numHabitaciones'];
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
    <h1 class="f3  m1  font-color">Cotizador</h1>
    <div class="container  flex  flex-wrap">
        <!--mapa de cobertura-->
        <div class="item  ph12  sm4  md4  lg4 flex-auto">
            <img class="m1" src="<?=base_url?>assets/img/mapHausi.png" alt="Mapa de Hausi">
        </div>
        <!-- Vista Lateral--> 
        <aside class="item ph12  sm8  md8  lg8  flex-auto">
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
            <h2> Selecciona el número de habitaciones</h2>            
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
            <h2> Selecciona el numero de espacios abiertos</h2>
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
            </select>
            <br><br>
            <input type="submit" value="cotizar">
        </form>
        <br><br>
        <?php echo isset($importeFormat) ? "El importe será de : $ ".$importeFormat : ''?>
        </aside>
    </div>
</section>
<footer>
    <!--Datos del Negocio-->
</footer>

<script src="<?=base_url?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?=base_url?>assets/js/myscripts.js"></script>
</body>
</html>
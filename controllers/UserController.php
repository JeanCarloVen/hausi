<?php
class UserController{
    public function index(){
        require_once 'views/user/main.php';
    }
    
    public function cotizador(){
        require_once 'views/layouts/header_cotizador.php';
        require_once 'views/cotizador/cotizador.php';
    }
    
    public function cotizador_calc(){
        //FALTA Blindar contra inyecciones
        $importe = '';
        if($_POST){
            if($_POST['zona'] != 0 && $_POST['numEspaciosCerrados'] != 0 && $_POST['numEspaciosAbiertos'] != 0){
                //Precios por zona
                $zona= $_POST['zona'];
                //Numero de espacios cerrados;
                $numHab = $_POST['numEspaciosCerrados'];
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
        require_once 'views/cotizador/cotizador.php';
        
    }
    
}




?>

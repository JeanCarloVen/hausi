<?php
class UserController{
    public function index(){
        require_once 'views/user/main.php';
    }
    
    public function cotizador(){
        require_once 'views/layouts/header_cotizador.php';
        require_once 'views/cotizador/cotizador.php';
    }
    
}




?>

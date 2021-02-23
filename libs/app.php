<?php 
    require_once 'controllers/errores.php';
    class App {
        function __construct(){
            echo '<h1>Hola a todos</h1>';

            $url = $_GET['url'];
            $url = rtrim($url,'/');
            $url = explode('/',$url);

            $archivo = 'controllers/'.$url[0].'.php';

            if(file_exists($archivo)){
                require_once $archivo;
                $controller = new $url[0];

                if(isset($url[1])){
                    $controller->{$url[1]}();
                }
            } else {
                $error = new Errores();
            }
        }
    }

?>
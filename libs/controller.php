<?php
    class Controller {
        function __construct(){
            $this->view = new View();
        }

        function loadModel($model){
            $archivo = 'models/'.$model.'model.php';

            if(file_exists($archivo)){
                require $archivo;
                $nombreModel = $model.'Model';
                $this->model = new $nombreModel();
            }
        }
    }
?> 
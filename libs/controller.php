<?php
    class Controller {
        function __construct(){
            echo '<p>Controlador</p>';
            $this->view = new View();
        }
    }
?> 
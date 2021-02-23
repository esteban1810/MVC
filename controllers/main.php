<?php
    class Main  extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->render('main/index');
            echo '<h1>Constructor Main</h1>';
        }

        function saludo(){
            echo '<p>Ejecutaste el metodo saludo</p>';
        }
    }
?>
<?php require 'views/header.php';?>
    <main class="content">
        <h1>Agregar Un Nuevo Registro</h1>
        <form action="<?= constant('URL'); ?>nuevo/registrarAlumno" method="post">
            <div>
                <label for="matricula">Matricula:</label><br>
                <input type="text">
            </div>
            <div>
                <label for="nombre">Nombre:</label><br>
                <input type="text">
            </div>
            <div>
                <label for="apellido">Apellido:</label><br>
                <input type="text">
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
        </form>
    </main>
<?php require 'views/footer.php';?>
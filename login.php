<?php 
    // Importar la base
    require 'includes/config/database.php';
    $db = conectarDB();

    $errores = [];

    // Autenticar el usuario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //var_dump($_POST);

        $email = mysqli_real_escape_string($db, filter_var($_POST['email'],FILTER_VALIDATE_EMAIL));
        $pass = mysqli_real_escape_string($db, $_POST['password']);
        
        if (!$email) {
            $errores[] = 'El e-mail es obligatorio o no es valido.';
        }
        if (!$pass) {
            $errores[] = 'El password es obligatorio.';
        }

        if(empty($errores)) {
            $qry = "SELECT * FROM usuarios WHERE email = '${email}';";
            $result = mysqli_query($db,$qry);

            if ($result -> num_rows) {
                // Tomo el resultado de la consulta y lo dejo en la variable usuario
                $usuario = mysqli_fetch_assoc($result);
                // Valido el password escrito con el de la base que esta hasheado. Utilizo una funcion de PHP
                $auth = password_verify($pass,$usuario['pass']);

                if ($auth) {
                    // inicio la sesion
                    session_start();
                    // completo la super global SESSION
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;

                    header('location: /bienesraices/admin');

                } else {
                    $errores[] = 'El password es incorrecto.';
                }

            } else {
                $errores[] = 'El usuario no existe.';
            }
        }
    }

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesion</h1>

        <?php foreach ($errores as $error): ?>
            <div class="alerta error">
            <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form method="POST" class="formulario">
            <fieldset>
                <legend>Email y Password</legend>
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Tu Email" id="email">

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Tu Password" id="password">
            </fieldset>
            <input type="submit" value="Iniciar Sesion" class="boton boton-verde">
        </form>

    </main>

<?php 
    incluirTemplate('footer');
?>
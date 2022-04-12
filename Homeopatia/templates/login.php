<?php
    session_start();

    $nombreUsr = $_POST ['nombre'];
    $passUsr = $_POST['pass'];

    //credenciales de la base de datos
    $host = '127.0.0.1';
    $userdb = 'root';
    $passdb = '';
    $bd = 'homeopatia';

    //seccion de conexion a la base de datos
    $conexion = mysqli_connect($host, $userdb, $passdb, $bd);

    //seccion de consulta
    $consulta = "SELECT * FROM usuarios where nombreUsr LIKE '$nombreUsr' and passUsr LIKE '$passUsr';";

    //respuesta de la base de datos
    $res = mysqli_query($conexion, $consulta);
    if($filas = mysqli_fetch_row($res) > 0)
    {
        $_SESSION["nombre"] = "$nombreUsr";
        
        echo '
        <script language="javascript">
            alert("Usuario correcto");
            window.location.href = "../index.php";
        </script>';
    }
    else
    {
        echo '
        <script language="javascript">
            alert("Usuario incorrecto");
            window.location.href = "../index.php";
        </script>';
    }
?>
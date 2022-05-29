<?php
session_start();
if(!isset($_SESSION["LeCar_User"]))
{
    header("Location:login.php");
    exit;

}

?>

<html>
    <body>
        <h1>Benvenuto</h1>
    </body>
</html>
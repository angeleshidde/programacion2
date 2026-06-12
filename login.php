<?php
session_start();
$mailuser = "test@test.com";
$claveuser = 123456;

$mailuser= "locura@locura.com";
$claveuser= 324;

$email= $_POST["email"];
$clave= $_POST["clave"];

$clave = trim(htmlspecialchars($clave));
$email= trim(htmlspecialchars($email));

echo "email: $email <br>";
echo "clave: $clave";
/*
if (empty($email) ||  empty($clave))
    {
        echo "error en las credenciales";
        exit;
    } */   
if( ($clave == $claveuser)&& ($email == $mailuser))
    {
        $_SESSION["nombre"] = "pepe";
        $_SESSION["apellido"] = "grillo";
        header("location:http://localhost/programacion/home.php");
    }
    else
    {
           header("location:http://localhost/programacion/");
            exit;
    }
?>
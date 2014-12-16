<?php

$email=$_POST['email'];
$senha=$_POST['senha'];

include "usuario.class.php";
$obj= new rede();
$obj->Conectar("rede");
$obj->Login($email,$senha);

?>
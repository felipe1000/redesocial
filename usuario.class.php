<?php
 
 class rede{
	 
	 public $banco;
	 
	 function Conectar($banco){
		 
		 $conecta = mysql_connect ("localhost","root","") or die ("Erro na Função Conectar");
		 mysql_select_db ($banco) or die ("Erro na Função Conectar");
		 
	 }
	 function Login($email,$senha){
		 
		 $consulta = "SELECT nome, email, senha FROM usuario WHERE email='$email' AND senha='$senha'";
		 $resultado = mysql_query($consulta) or die ("Erro na Função Login");
		 
		 if(mysql_num_rows($resultado)!=1){
			 
			 echo "E-mail ou Senha Errado";
		 
		 }else{
			 
			 echo "Conectado!!!";
		 }
	 }
 }

?>
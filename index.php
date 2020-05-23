<?php 

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//Carrega um usuário

//$root = new Usuario();
//$root->loadbyId(4);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getlist();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuario usando o login e a senha
$usuario = new usuario();
$usuario->login("root", "12121");

echo $usuario;
 
 ?>
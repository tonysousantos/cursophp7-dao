<?php 
require_once "config.php";

$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

// Carrega um Usuário
/*
$root = new Usuario();
$root->loadById(1);
echo $root;
*/

// Carrega uma lista de Usuários
$lista = Usuario::getList();
echo json_encode($lista);

echo "<br>";

// Carrega uma lista de usuarios buscando pelo login
$search = Usuario::search("user");
echo json_encode($search);

echo "<br>";

// Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("user","123456");
echo $usuario;

?>
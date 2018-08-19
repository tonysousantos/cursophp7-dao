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

echo "<hr>";

// Carrega uma lista de usuarios buscando pelo login
$search = Usuario::search("user");
echo json_encode($search);

echo "<hr>";

// Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("user","123456");
echo $usuario;

echo "<hr>";

// INSERE UM NOVO USUÁRIO
/*
$aluno = new Usuario();
$aluno->setDeslogin("asousa");
$aluno->setDessenha("123");
$aluno->insert();
echo $aluno;
*/

// INSERE UM NOVO USUÁRIO USANDO METO CONSTRUTOR
/*
$aluno = new Usuario("asousa","123");
$aluno->insert();
echo $aluno;
*/

// ALTERANDO DADOS DE USUARIO
/*
$usuario = new Usuario();
$usuario->loadByid(6);
$usuario->update("asousa alterado","jksdjs");
echo $usuario;
*/

// DELETANDO DADOS DE USUARIO
$usuario = new Usuario();
$usuario->loadById(6);
$usuario->delete();
echo $usuario;



?>
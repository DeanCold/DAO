<?php

require_once("config.php");

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);

// $root = new Usuario();

// $root->loadbyId(1);

// echo $root;


//Carrega uma Lista de usuarios

// $lista = Usuario::getList();

// echo json_encode($lista);


#Carrega uma lista de usuarios buscando pelo login

// $search = Usuario::search("Re");

// echo json_encode($search);

#Carrega um usuário usando o login e a senha
// $usuario = new Usuario();
// $usuario->verificarLogin("Reginaldo","regis");
//echo $usuario;
$aluno = new Usuario();

// $aluno->setDeslogin("aluno");

// $aluno->setDessenha("@aluno");

#Criando um novo usuario
// $aluno = new Usuario("aluno", "@luno");

// $aluno->insert();


// echo $aluno;

$usuario = new Usuario();

$usuario->loadByid(1);


$usuario->update("Aluno", "Cyclope");

echo $usuario;

?>
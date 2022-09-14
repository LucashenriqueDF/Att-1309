<?php

class Client {
    public $id;
    public $name;
    public $sub_name;
    public $CPF;

    public function __construct($id, $name, $sub_name, $CPF) { 
        $this->id = $id;
        $this->name = $name;
        $this->sub_name = $sub_name ;
        $this->CPF = $CPF;
    
     }
}

$client_1 = new Client("1","Ana", "Maria", "XXX.XXX.XXX.XX");

$client_2 = new Client("2","Pedro","Gustavo","XXX.XXX.XXX.XX");

$client_3 = new Client("3","João","Amorim","XXX.XXX.XXX.XX");

$client_4 = new Client("4","Lucas","Henrique","XXX.XXX.XXX.XX");

$client_5 = new Client("5","Luis","Silva",'XXX.XXX.XXX.XX');

$client_6 = new Client("6","Junior","Perreira","XXX.XXX.XXX.XX");

$client_7 = new Client("7","Fabiana","Jesus","XXX.XXX.XXX.XX");

$client_8 = new Client("8","José","Silva","XXX.XXX.XXX.XX");

$client_9 = new Client("9","Elisa","Santos","XXX.XXX.XXX.XX");

$client_10 = new Client("10","Juliana","Santos","XXX.XXX.XXX.XX");

$clients_list = [
    $client_1,
    $client_2,
    $client_3,
    $client_4,
    $client_5,
    $client_6,
    $client_7,
    $client_8,
    $client_9,
    $client_10,
  
];




class Funcionarios {
    public $id;
    public $name;
    public $sub_name;
    public $CPF;

    public function __construct($id, $name, $sub_name, $CPF) { 
        $this->id = $id;
        $this->name = $name;
        $this->sub_name = $sub_name ;
        $this->CPF = $CPF;
    
     }
}

$funcionarios_1 = new Funcionarios("1","Ana", "Maria", "XXX.XXX.XXX.XX");

$funcionarios_2 = new Funcionarios("2","Pedro","Gustavo","XXX.XXX.XXX.XX");

$funcionarios_3 = new Funcionarios("3","João","Amorim","XXX.XXX.XXX.XX");

$funcionarios_4 = new Funcionarios("4","Lucas","Henrique","XXX.XXX.XXX.XX");

$funcionarios_5 = new Funcionarios("5","Luis","Silva",'XXX.XXX.XXX.XX');

$funcionarios_6 = new Funcionarios("6","Junior","Perreira","XXX.XXX.XXX.XX");

$funcionarios_7 = new Funcionarios("7","Fabiana","Jesus","XXX.XXX.XXX.XX");

$funcionarios_8 = new Funcionarios("8","José","Silva","XXX.XXX.XXX.XX");

$funcionarios_9 = new Funcionarios("9","Elisa","Santos","XXX.XXX.XXX.XX");

$funcionarios_10 = new Funcionarios("10","Juliana","Santos","XXX.XXX.XXX.XX");

$clients_list = [
    $funcionarios_1,
    $funcionarios_2,
    $funcionarios_3,
    $funcionarios_4,
    $funcionarios_5,
    $funcionarios_6,
    $funcionarios_7,
    $funcionarios_8,
    $funcionarios_9,
    $funcionarios_10,
  
];





class Usuario {
    public $id;
    public $name;
    public $sub_name;
    public $CPF;

    public function __construct($id, $name, $sub_name, $CPF) { 
        $this->id = $id;
        $this->name = $name;
        $this->sub_name = $sub_name ;
        $this->CPF = $CPF;
    
     }
}

$usuario_1 = new Usuario("1","Ana", "Maria", "XXX.XXX.XXX.XX");

$usuario_2 = new Usuario("2","Pedro","Gustavo","XXX.XXX.XXX.XX");

$usuario_3 = new Usuario("3","João","Amorim","XXX.XXX.XXX.XX");

$usuario_4 = new Usuario("4","Lucas","Henrique","XXX.XXX.XXX.XX");

$usuario_5 = new Usuario("5","Luis","Silva",'XXX.XXX.XXX.XX');

$usuario_6 = new Usuario("6","Junior","Perreira","XXX.XXX.XXX.XX");

$usuario_7 = new Usuario("7","Fabiana","Jesus","XXX.XXX.XXX.XX");

$usuario_8 = new Usuario("8","José","Silva","XXX.XXX.XXX.XX");

$usuario_9 = new Usuario("9","Elisa","Santos","XXX.XXX.XXX.XX");

$usuario_10 = new Usuario("10","Juliana","Santos","XXX.XXX.XXX.XX");

$clients_list = [
    $usuario_1,
    $usuario_2,
    $usuario_3,
    $usuario_4,
    $usuario_5,
    $usuario_6,
    $usuario_7,
    $usuario_8,
    $usuario_9,
    $usuario_10,
  
];



class Fornecedor {
    public $id;
    public $name;
    public $sub_name;
    public $CPF;

    public function __construct($id, $name, $sub_name, $CPF) { 
        $this->id = $id;
        $this->name = $name;
        $this->sub_name = $sub_name ;
        $this->CPF = $CPF;
    
     }
}

$fornecedor_1 = new Fornecedor("1","Ana", "Maria", "XXX.XXX.XXX.XX");

$fornecedor_2 = new Fornecedor("2","Pedro","Gustavo","XXX.XXX.XXX.XX");

$fornecedor_3 = new Fornecedor("3","João","Amorim","XXX.XXX.XXX.XX");

$fornecedor_4 = new Fornecedor("4","Lucas","Henrique","XXX.XXX.XXX.XX");

$fornecedor_5 = new Fornecedor("5","Luis","Silva",'XXX.XXX.XXX.XX');

$fornecedor_6 = new Fornecedor("6","Junior","Perreira","XXX.XXX.XXX.XX");

$fornecedor_7 = new Fornecedor("7","Fabiana","Jesus","XXX.XXX.XXX.XX");

$fornecedor_8 = new Fornecedor("8","José","Silva","XXX.XXX.XXX.XX");

$fornecedor_9 = new Fornecedor("9","Elisa","Santos","XXX.XXX.XXX.XX");

$fornecedor_10 = new Fornecedor("10","Juliana","Santos","XXX.XXX.XXX.XX");

$clients_list = [
    $fornecedor_1,
    $fornecedor_2,
    $fornecedor_3,
    $fornecedor_4,
    $fornecedor_5,
    $fornecedor_6,
    $fornecedor_7,
    $fornecedor_8,
    $fornecedor_9,
    $fornecedor_10,
  
];

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



	<table>
        <h1>CLIENTES</h1>
          <thead>
            
              <th>id</th>
              <th>NOME</th>
              <th>SOBRENOME</th>
              <th>CPF</th>
            </thead>
    <?php for( $i = 0; $i <= count($clients_list) - 1; $i++) { ?>
            <tr>
                <td><?=$clients_list[$i]->id?></td>
                <td><?=$clients_list[$i]->name?></td>
                <td><?=$clients_list[$i]->sub_name?></td>
                <td><?=$clients_list[$i]->CPF?></td>
            </tr>    
    <?php } ?>
    </table> 
    
    


	<table>
        <H1>FUNCIONARIOS </H1>
          <thead>
            <th>id</th>
              <th>NOME</th>
              <th>SOBRENOME</th>
              <th>CPF</th>
            </thead>
    <?php for( $i = 0; $i <= count($clients_list) - 1; $i++) { ?>
            <tr>
                <td><?=$funcionario_list[$i]->id?></td>
                <td><?=$funcionario_list[$i]->name?></td>
                <td><?=$funcionario_list[$i]->sub_name?></td>
                <td><?=$funcionario_list[$i]->CPF?></td>
            </tr>    
    <?php } ?>
    </table> 
    
    

	<table>
        <H1>USUARIOS</H1>
          <thead>
            <th>id</th>
              <th>NOME</th>
              <th>SOBRENOME</th>
              <th>CPF</th>
            </thead>
    <?php for( $i = 0; $i <= count($clients_list) - 1; $i++) { ?>
            <tr>
                <td><?=$usuario_list[$i]->id?></td>
                <td><?=$usuario_list[$i]->name?></td>
                <td><?=$usuario_list[$i]->sub_name?></td>
                <td><?=$usuario_list[$i]->CPF?></td>
            </tr>    
    <?php } ?>
    </table>    



	<table>
        <H1>FORNCEDORES</H1>
          <thead>
            <th>id</th>
              <th>NOME</th>
              <th>SOBRENOME</th>
              <th>CPF</th>
            </thead>
    <?php for( $i = 0; $i <= count($clients_list) - 1; $i++) { ?>
            <tr>
                <td><?=$clientsFornecedor_list[$i]->id?></td>
                <td><?=$clientsFornecedor_list[$i]->name?></td>
                <td><?=$clientsFornecedor_list[$i]->sub_name?></td>
                <td><?=$clientsFornecedor_list[$i]->CPF?></td>
            </tr>    
    <?php } ?>
    </table>    
</body>
</html>
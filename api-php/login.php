<?php
   header('Access-Control-Allow-Origin: *');

   // Set up the PDO parameters
$Mysqli = new mysqli('127.0.0.1', 'root', '', 'super');
 
$request = $_SERVER['REQUEST_METHOD'] == 'GET' ? $_GET : $_POST;
 

 
 
      $login = addslashes($_GET['username']);
      $Tsenha = addslashes($_GET['password']);

      $senha= md5($Tsenha);
 
      $erro = "";
      $erro .= empty($login) ? "Informe o seu login \n" : "";
      $erro .= empty($senha) ? "Informe a sua senha \n" : "";
 
      $arr = array();
 
      if(empty($erro)){
         $query = "SELECT * FROM usuarios WHERE login = '{$login}' and senha = '{$senha}'";
         $result = $Mysqli->query($query);
 
         if($result->num_rows > 0){
            //login logado
            $obj = $result->fetch_object();
 
            $arr['result'] = true;
            $arr['dados']['id']         = $obj->id;
            $arr['dados']['login']      = $obj->login;
            $arr['dados']['nome']       = $obj->nome;
            $arr['dados']['sobrenome']  = $obj->sobrenome;
         }else{
            $arr['result'] = false;
            $arr['msg'] = "USUARIO INCORRETO";
         }
      }else{
         $arr['result'] = false;
         $arr['msg'] = $erro;
      }
 
      echo json_encode($arr);




?>
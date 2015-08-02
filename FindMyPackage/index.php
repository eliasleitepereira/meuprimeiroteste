<!DOCTYPE html>
<!--
PI - Projeto Integrador XXXXX
Data de Atualização: 23/02/2015
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>FindMyPackage!</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/signin.css" rel="stylesheet" type="text/css"/>
    </head>
    <img class="logo" src="images/logoG.png">
    <body class="fundoInicial">
       <div class="container">
      <form class="form-signin" method="post" action=""
            name="frmacesso">
          <center><h2 class="form-signin-heading">Login</h2></center>
          <label for="inputEmail" class="sr-only">
                  Usuário</label>
        <input type="text" 
               id="inputEmail" 
               class="form-control" 
               placeholder="Nome do usuário" 
               required autofocus
               name="txtusuario">
        <label for="inputPassword" 
               class="sr-only">Senha</label>
        <input type="password" 
               id="inputPassword" 
               class="form-control" 
               placeholder="Informe sua senha" 
               required
               name="txtsenha">
        <input type="submit" name="btnenviar"
               class="btn btn-lg btn-primary btn-block"
               value="Acesso"/>
        
      </form>

    </div> <!-- /container -->
   <?php
   //include('includes/conexao.php');
   $servidor=mysql_connect("localhost","root","");
   $banco=mysql_select_db("findmyckage",$servidor);
   if(isset($_POST['btnenviar'])){
       $usuario=$_POST['txtusuario'];
       $senha=md5($_POST['txtsenha']);
       $consulta=mysql_query("Select * "
               . "from users where user='$usuario'"
               . " and password='$senha' "
               . "and perfilid=1");
       $resultado = mysql_num_rows($consulta);
       if($resultado>0){
           header('Location:administrador/admin.php');
       }else {
           echo 'Acesso negado';
       }
    
   }
    
?>

  
    </body>
</html>

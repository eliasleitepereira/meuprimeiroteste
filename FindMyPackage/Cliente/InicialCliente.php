<html>  
<head>
        <meta charset="UTF-8">
       <title>FindMyPackage!</title>
        <link href="../bootstrap/css/bootstrap.min.css" 
              rel="stylesheet" 
              type="text/css"/>
        <link href="styleParaCliente.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.min.js"
        type="text/javascript"></script>
        <script 
        src=
        "../bootstrap/js/bootstrap.min.js"
        type="text/javascript">
        </script>
        
    </head>
    <body>
        <hr>
        
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a class="navbar-brand" href="">
            <img alt="" src="../images/logoicon.png" width="">
      
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li><a href="#">Meu Perfil</a></li>
           <li class="active"><a href="../administrador/usuarios.php">Historico<span class="sr-only">(current)</span></a></li>
        <li><a href="../Funcionarios/funcionarios.php">Empresas</a></li>
          </ul>
         <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
              <li role="presentation" class="active"><a href="../administrador/admin.php">Home</a></li>
            <li role="presentation"><a href="#">Sobre</a></li>
            <li role="presentation"><a href="#">Avaliações</a></li>
          </ul>

        </nav>
      </div>
        </div>
          <hr>
          <div class="page-header">
              <h1 id="sauda">Bem Vindo ao FindMyPackage!</h1>
          </div>
          <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
             <center><form method="get" action="principallocali.php" id="search">
                     <input name="q" type="text" class="form-control" id="tf_center" size="32" placeholder="Insira seu código aqui..." /> </center>
          
        </div>
              <button type="submit" class="btn btn-default" id="bt_center">Pesquisar</button>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              </div>
          </form>
                 
              </div></div></div></nav>

</body> </html>
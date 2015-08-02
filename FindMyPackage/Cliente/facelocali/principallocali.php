<html>  
<head>
        <meta charset="UTF-8">
       <title>FindMyPackage!</title>
        <link href="../../bootstrap/css/bootstrap.min.css" 
              rel="stylesheet" 
              type="text/css"/>
        <link href="../styleParaCliente.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.min.js"
        type="text/javascript"></script>
        <script 
        src=
        "../bootstrap/js/bootstrap.min.js"
        type="text/javascript">
        </script>
        <script src="http://maps.googleapis.com/maps/api/js"></script>

<script src="../../js/googlemaps.js" type="text/javascript"></script>


    </head>
    <body>
        <hr>
        
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a class="navbar-brand" href="">
            <img alt="" src="../../images/logoicon.png" width="">
      
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
              <h1>Tempo: </h1>
          </div>
          <div class="row">
              <div class="col-md-6">
                 <!-- adicionar php dentro dessa tabela -->
                  <table class="table" id="tableinfo">
                      <thead>
                          <tr><th>Nome: </th></tr>
                          <tr><th>Entregador: </th></tr>
                          <tr><th>Mercadoria: </th></tr>
                          <tr><th>Empresa: </th></tr>
                          <tr><th>Preço: </th></tr>
                          
                      </thead>
                  </table>
                  <table class="tablemapa2">
                      <tr><th><div id="googleMap" style="width:630px;height:650px;"></div>
                  </th></tr>
                  </table>
                  <table style="position:absolute; top:350px; left:35px;">
                      <tr><th><button class="botaoUltra" >Tempo Ultrapassado</button></th>
                          <th> <button class="botaoConfirm">Confirma Entrega</button></th>
                      </tr>
                  </table>
                  
              </div></div></div></nav>

</body> </html>

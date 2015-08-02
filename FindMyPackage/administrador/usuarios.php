<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuarios</title>
        <link href="../bootstrap/css/bootstrap.min.css" 
              rel="stylesheet" 
              type="text/css"/>

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
                    <a class="navbar-brand" href="#">
                        <img alt="" src="../images/logoicon.png" width="">

                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="perfil.php">Perfil</a></li>
                        <li class="active"><a href="usuarios.php">Usuários<span class="sr-only">(current)</span></a></li>
                        <li><a href="../Entregas/entregas.php">Entregas</a></li>
                        <li><a href="../Funcionarios/funcionarios.php">Funcionarios</a></li>


                    </ul>
                    </li>
                    </ul>
                    <form class="navbar-form navbar-left" 
                          role="search">
                        <div class="form-group">
                            <center><form method="get" action="/search" id="search">
                                    <input name="q" type="text" class="form-control" size="40" placeholder="Pesquisar Cliente" />

                                    </div>
                                    <button type="submit" 
                                            class="btn btn-default">Pesquisar</button>
                                </form>
                                <div class="container">
                                    <div class="header clearfix">
                                        <nav>
                                            <ul class="nav nav-pills pull-right">
                                                <li role="presentation" class="active"><a href="admin.php">Home</a></li>
                                                <li role="presentation"><a href="#">About</a></li>
                                                <li role="presentation"><a href="#">Contact</a></li>
                                            </ul>

                                        </nav>
                                    </div>
                                </div>
                                <hr>
                                <div class="page-header">
                                    <h1>Lista de usuários</h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Foto</th>
                                                    <th>Nome do Usuário</th>
                                                    <th>Perfil</th>
                                                    <th>Excluir</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                include("../includes/conection.php");
                                                $listar = mysql_query("Select users.*,perfis.* "
                                                        . "from users inner join perfis "
                                                        . "on (users.perfilid=perfis.id)");

                                                while ($listinha = mysql_fetch_array($listar)) {
                                                    $codigo = $listinha['id'];
                                                    $foto = $listinha['foto'];
                                                    ?> 
                                                    <tr>
                                                        <td><img src="<?php echo $foto; ?>" width="100"/>
                                                        </td>
                                                        <td><a href="atualiza_user.php">
                                                                <?php echo $listinha['user']; ?>
                                                            </a>
                                                        </td>
                                                        <td><?php echo ' - ' . $listinha['perfil']; ?></td>
                                                        <td><?php echo $codigo; ?></td>
                                                    </tr>
                                                <?php } ?> 

                                        </table>
                                    </div></div></div></nav></body>
                        </nav>
                        <hr>

                        <?php
                        ?>
                        </html>







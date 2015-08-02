<?php
$codigo= $_GET['codigouser'];
include("../includes/conexao.php");
$listar=mysql_query("Select * from users where id=$codigo");
$resultado=mysql_fetch_array($listar);?>
<form action="" 
      method="get" 
      name="frmatualiza">
<input type = "text" 
        name = "txtusuario" 
        value = "<?php echo $resultado['user']; ?>" />
</form>

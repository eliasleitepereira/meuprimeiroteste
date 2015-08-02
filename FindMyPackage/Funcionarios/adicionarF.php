<html>
    <head>
        <meta charset="UTF-8">
        <title>Adicionar</title>
        
        <link href="EstiloF.css" rel="stylesheet" type="text/css"/>
    </head>
    <body <image url="http://7-themes.com/data_images/out/31/6874808-tumblr-wallpaper.jpg"> 
      
        <h1>Cadastrando Funcionarios</h1>
        <div  class="central">
        <table class="">
            <tr>
                <td class="linha1">  <label name="label1"> Nome do funcionario: </label><input type="text" > <br> </td>
            <td class="linha1">  <label name="label1"> Idade: </label><input type="text" > <br> </td></tr>
            <tr> <td class="linha1"> <label> Matricula: </label><input type="text" > <br> </td> 
                <td class="linha1"><label> Sexo: </label><input type="text" > </td> </tr>
            <tr> <td class = "linha1_2"> <label> Tipo do Veiculo: </label><input type="text" > <br> </td></tr>
            <tr> <td claSS = "linha1"><label> Placa do Veiculo: </label><input type="text" > <br> </td>         
            <tr> <td claSS = "linha1"><label> Login: </label><input type="text" > <br> </td> </tr>
        <tr> <td claSS = "linha1"><label> Senha: </label><input type="text" > <br> </td> </tr>
        </table>
        <table class="botoes">
            <tr> <td> <button class="botao1" href="entregas.php" >Voltar</button></td> 
                <td><button class="botao2">Cadastro</button></td> </tr>
        </table>
        </div>
        <nav class="FotoF">
            <table>
                <tr> <td> <button class="botao1" href="entregas.php" > Adicionar Arquivo.. </button></td> 
<?php              
                    include("../includes/conection.php");
$listar=mysql_query("Select users.*,funcionario.* "
        . "from users inner join funcionario "
        . "on (users.id=funcionario.id)");
                      
while($listinha=mysql_fetch_array($listar)){
    $codigo= $listinha['id'];
    $foto=$listinha ['foto']
    ?> 
                      <tr>
                          <td><img src="<?php echo $foto;?>" width="100px"></td>
<?php } ?>
            </table>
        </nav>
        </body>
</html>
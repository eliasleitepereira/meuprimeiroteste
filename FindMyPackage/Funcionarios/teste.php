<html>
<head>
<title>Centrar uma  página com CSS</title>
<meta http-equiv="Content-Type" content="text/html; 
charset=iso-8859-1">
<style type="text/css">
body {
	margin:0;
	padding:0;
	background:#ccc;
	text-align:center; /* hack para o IE */	
	}
#tudo {
	width: 760px;
	margin:0 auto;			
	text-align:left; /* "remédio" para o hack do IE */	
	}
#conteudo {
	padding: 5px;
	background-color: #eeee;
	}
</style>
</head>
<body>
<div id="tudo">
	<div id="conteudo">
		<h1>Pagina Centrada com CSS sem scroll até 800x600</h1>
		<p> Não use nenhum elemento HTML figuras, tabelas, etc...) com largura superior a 750px.</p>
	</div>
</div>
</body>
</html>
<html>
<head>
<title>Processamento de arquivos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<p><img src="http://www.digicompras.com.br/imagens/logo-transp.png"></p>
<p>&nbsp;</p>


<?
error_reporting(E_ALL);

require '../../conect/conect.php';

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];

$comando = "update `multseg_multseg`.`representantes` set `nome` = '$nome' where `representantes`. `codigo` = '$codigo' limit 1 ";

mysql_query($comando,$conexao) or die("Erro ao gravar dados");

echo "As novas informações do representante foram alteradas com sucesso";
?>

<?
mysql_close($conexao);
?>

<p><a href="menu.php">Voltar</a></p>
</body>
</html>

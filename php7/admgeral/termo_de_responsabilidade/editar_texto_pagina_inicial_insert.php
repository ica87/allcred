<?php

session_start(); //inicia sess�o...

if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...

echo ""; //se for emite mensagem positiva.

else //se n�o for...

header("Location: alerta.php");



?>



<html>

<head>

<title>Documento sem t&iacute;tulo</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>



<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">



<form name="form1" method="post" action="menu.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit22" value="Voltar">

</form>

<form action="grava_edit_texto_pagina_inicial.php" method="post" enctype="multipart/form-data" name="form1">

  <table width="100%" border="0" cellspacing="10">

    <tr>

      <td colspan="2">        <?

require '../../conect/conect.php';



?>

</td>

    </tr>

    <tr>

      <td width="11%">&nbsp;</td>

      <td width="89%"><strong><font color="#0000FF" size="4">Editar texto do termo de responsabilidade das propostas!</font></strong></td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td>

	<?

$sql = "SELECT * FROM termo_de_responsabilidade";

$res = mysql_query($sql);


while($linha=mysql_fetch_row($res)) {

$reg++;

$termo = $linha[1];

?>

	  



	  

	  </td>

    </tr>

    <tr> 

      <td><font color="#0000FF"><strong>Descri&ccedil;&atilde;o:</strong></font></td>

      <td><textarea name="termo" cols="100" rows="10" wrap="PHYSICAL" id="termo"><? echo $termo; ?></textarea>
        <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>



          <? } ?>	  </td>

    </tr>

    <tr> 

      <td>&nbsp;</td>

      <td><input type="submit" name="Submit" value="Salvar">

      <input type="reset" name="Submit2" value="Limpar"></td>

    </tr>

    <tr> 

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

</form>

<p>&nbsp; </p>

</body>

</html>


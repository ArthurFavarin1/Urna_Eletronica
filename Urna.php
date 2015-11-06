
<?php 
$nulo=isset($_GET['campo']);
$branco=isset($_GET['branco']);
$confirma=isset($_GET['confirmar']);


if($nulo && isset($_GET['digito'])){
	$voto = $_GET['campo'];

	$num = $_GET['digito'];

	$voto .= $num;
}else{
	$voto = null;
}
?>
<?php
if($confirma =='confirmar'){
   $arquivo="urna_votos_validos.txt";    
   $conteudo="$_GET[campo],";
   $abertura=fopen("$arquivo","a+");
   $gravacao=fwrite($abertura,$conteudo);
   fseek($abertura,0);
   $leitura=fread($abertura,filesize($arquivo));
   fclose($abertura);
   
   //echo"<br>conteudo do arquivo:$leitura";
}else 
  if($branco =='branco'){
   $arquivo="urna_votos_brancos.txt";
   $conteudo="branco,";
   $abertura=fopen("$arquivo","a+");
   $gravacao=fwrite($abertura,$conteudo);
   fseek($abertura,0);
   $leitura=fread($abertura,filesize($arquivo));
   fclose($abertura);
}else
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="" method="get">
	
	<div>
	<table border='0' height="3" width="3">
	<tr>
        <input type="text" name="campo" id="campo" value="<?php echo $voto; ?>" />		
	</tr>
	
	<tr>
                <td><input type="submit"  name="digito" value="1" /> </td>
		<td><input type="submit"  name="digito" value="2" /></td>
		<td><input type="submit"  name="digito" value="3" /></td>
	</tr>
	<tr>
		<td><input type="submit" name="digito"  value="4" /></td>
		<td><input type="submit" name="digito"  value="5" /></td>
		<td><input type="submit" name="digito"  value="6" /></td>
	</tr>
	<tr>
		<td><input type="submit" name="digito"  value="7" /></td>
		<td><input type="submit" name="digito"  value="8" /></td>
		<td><input type="submit" name="digito"  value="9" /></td>
	</tr>
	        <td><input type="submit" name="digito"  value="0" /></td>
	<tr>
		<td><input type="submit" name="cancelar"  value="cancelar" /></td>
		<td><input type="submit" name="branco"  value="branco" /></td>
		<td><input type="submit" name="confirmar" value="confirmar" /></td>
	</tr>
	</table>
	</div>
	</form>
	<div>
		<h2>Legenda</h2>
		<p>13-Dilma</p>
                <p>24-Leandro</p>
		<p>45-Aecio</p>
		<p>50-Joaquim</p>
	</div>
</body>
</html>

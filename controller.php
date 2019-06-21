<div class="geral">
<?php
	include("cabecalho.php");
	include("script.php");
	include("funcao.php");
?>
<style>
	.geral{
		margin:0 auto;
		width: 60%
	}
	.formulario{
		margin-top: 10px;
		margin-bottom: 10px;
		width: 98.5%;
		padding-top: 15px;
		padding-left: 15px;
		height: 45px;
		background-color: silver;
		border-radius: 5px;	
	}
	input[type=number]{
		height: 30px;
		width: 70px;
	}
	input[type=text]{
		height: 30px;
		width: 250px;
	}
	input[type=submit]{
		height: 30px;
		width: 80px;
	}
	div{
			margin-top: 10px;
			margin-bottom: 10px;
			width: 100%;			
		}
	table{
		border-collapse: collapse;
		width: 100%;
		font-size: 18px;
	}
	td{
		border: 0px;
	}
	tr:nth-child(even) {
		height:35px;
		background: #FFF}
	tr:nth-child(odd) {
		height: 35px;
		background: silver
	}
	.resultado{
		font-weight: bold;
		font-size: 25px;
		text-align: right;
		background-color: silver;
	}
	.rodape{
		border: 1px solid silver; 
		background-color: black; 
		color: white; 
		height: 130px; 
		font-size: 15px; 
		text-align: center; 
		padding-top: 5px;
	}
	.foto{
		display: inline-block;
		width: 200px;
		height: 200px;
		border: 1px;
		float: left;
	}
	img{
		border-radius: 100px;
	}
	.dados{
		display: inline-block;
		width: 300px;
		height: 100px;
		border: 1px;
		float: left;
	}
</style>
<div class="formulario">
<form action="#" method="post">
	Codigo = <input type="number" name="codigo">
	Nome = <input type="text" name="nome">
	Salario = <input type="text" name="salario">
	<input type="submit" value="Cadastrar">
</form>
</div>
<?php
if (isset($_POST) && !empty($_POST)){
	$codigo = filter_input(INPUT_POST, "codigo");
	$nome = filter_input(INPUT_POST, "nome");
	$salario = filter_input(INPUT_POST, "salario");
	array_push($dados, array('id'=>$codigo,'nome'=>$nome, 'funcao'=>'Desenvolvedor e implantador Desktop','salario'=>$salario));	
}
table($dados);
include("rodape.php");
?>
</div>
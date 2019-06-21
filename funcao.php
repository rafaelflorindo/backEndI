<?php
function table($dados){
	//include ("script.php");
	?>
	<div>
	<h1>Listagem de registros</h1>

	<table border="1">
		<th>Item</th>
		<th>Código</th>
		<th>Nome</th>
		<th>Função</th>
		<th>Salário</th>
		<?php
			$somaSalario = 0;
			//$k=0;
			foreach ($dados as $key => $value) {
				?>
				<tr>
					<td align="center" width="5%"><?=$key?></td>
					<td align="center" width="5%"><?=$value["id"];?></td>
					<td width="35%"><?=$value["nome"];?></td>
					<td><?=$value["funcao"];?></td>
					<td align="right" width="18%">R$ <?=number_format($value["salario"], 2, ',', '.');?></td>
				</tr>
				<?php
				$somaSalario = $somaSalario + $value["salario"];
				//$k++;
			}
			$mediaSalario = $somaSalario/$key;
		?>
		<tr>
		<td colspan="4" class="resultado">Total do Salário</td><td class="resultado"> R$ <?=number_format($somaSalario, 2, ',', '.');?></td>
		</tr>
		<td colspan="4" class="resultado">Média Salarial </td><td class="resultado">R$ <?=number_format($mediaSalario, 2, ',', '.');?></td>
	</tr>
</table>
	</div>
<?php
}
?>

<!-- 
	Desenvolvido por Rodrigo de Castro Vidigal - RA: 1801867-5
-->
<!-- Código PHP para a atividade -->
<?php
	$salario = [
		["Rodrigo", 2000.30, 1500.10, 2250.00, 2800.00, 1900.00],
		["Paula", 2500.00, 2000.00, 4150.00, 2540.00, 4500.00],
		["Lucas", 1800.00, 1840.00, 6950.00, 6500.00, 3250.00],
		["Yves", 2200.00, 1990.00, 3200.00, 4212.00, 1452.00],
	];

	$soma1 = $salario[0][2] + $salario[0][3] + $salario[0][4] + $salario[0][5];
	$soma2 = $salario[1][2] + $salario[1][3] + $salario[1][4] + $salario[1][5];
	$soma3 = $salario[2][2] + $salario[2][3] + $salario[2][4] + $salario[2][5];
	$soma4 = $salario[3][2] + $salario[3][3] + $salario[3][4] + $salario[3][5];
	
	//$percent_comissao = 0.05;

	$comissao = [$soma1, $soma2, $soma3, $soma4];
	
?>

<!-- Código HTML da página -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TECINFO - Web Systems</title>
	<link href="css/estilo.css" rel="stylesheet">
</head>
<body>


<div id="principal">	
	
	<div id="cabecalho" align="center">
			<img src="images/logo_site.png" width="420px" />			
	</div>

	<div class="tabela">
		<h2 align="center">TABELA DE VENDAS E COMISSÕES</h2>

		<table align="center">
			<thead class="tb_titulo">
				<tr>
					<th>COLABORADOR</th>
					<th>SALÁRIO FIXO</th>
					<th>VENDA SEMANAL 1</th>
					<th>VENDA SEMANAL 2</th>
					<th>VENDA SEMANAL 3</th>
					<th>VENDA SEMANAL 4</th>
					<th>TOTAL VENDAS</th>
					<th>COMISSÃO</th>
					<th>SALÁRIO FINAL</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><?= $salario[0][0] ?></td>
					<td>R$ <?= number_format($salario[0][1], 2, ',', '.'); ?></td>
					<td>R$ <?= number_format($salario[0][2], 2, ',', '.'); ?></td>
					<td>R$ <?= number_format($salario[0][3], 2, ',', '.'); ?></td>
					<td>R$ <?= number_format($salario[0][4], 2, ',', '.'); ?></td>
					<td>R$ <?= number_format($salario[0][5], 2, ',', '.'); ?></td>
					<td class="tb_titulo">R$ <?= number_format($comissao[0], 2, ',', '.'); ?></td>
					<td class="tb_titulo">R$ <?= number_format($comis1 = $soma1 * 0.05, 2, ',', '.'); ?></td>
					<td class="tb_titulo">R$ <?= number_format($salario[0][1] + $comis1, 2, ',', '.'); ?></td>
				</tr>
				<tr>
					<td><?= $salario[1][0] ?></td>
					<td>R$ <?= number_format($salario[1][1], 2, ',', '.'); ?></td>
					<td>R$ <?= number_format($salario[1][2], 2, ',', '.'); ?></td>
					<td>R$ <?= number_format($salario[1][3], 2, ',', '.'); ?></td>
					<td>R$ <?= number_format($salario[1][4], 2, ',', '.'); ?></td>
					<td>R$ <?= number_format($salario[1][5], 2, ',', '.'); ?></td>
					<td class="tb_titulo">R$ <?= number_format($comissao[1], 2, ',', '.'); ?></td>
					<td class="tb_titulo">R$ <?= number_format($comis1 = $soma2	 * 0.05, 2, ',', '.'); ?></td>
					<td class="tb_titulo">R$ <?= number_format($salario[1][1] + $comis1, 2, ',', '.'); ?></td>
				</tr>
				<tr>
					<td><?= $salario[2][0] ?></td>
					<td>R$ <?= number_format($salario[2][1], 2, ',', '.'); ?></td>
					<td>R$ <?= number_format($salario[2][2], 2, ',', '.'); ?></td>
					<td>R$ <?= number_format($salario[2][3], 2, ',', '.'); ?></td>
					<td>R$ <?= number_format($salario[2][4], 2, ',', '.'); ?></td>
					<td>R$ <?= number_format($salario[2][5], 2, ',', '.'); ?></td>
					<td class="tb_titulo">R$ <?= number_format($comissao[2], 2, ',', '.'); ?></td>
					<td class="tb_titulo">R$ <?= number_format($comis1 = $soma3 * 0.05, 2, ',', '.'); ?></td>
					<td class="tb_titulo">R$ <?= number_format($salario[2][1] + $comis1, 2, ',', '.'); ?></td>
				</tr>
				<tr>
					<td><?= $salario[3][0] ?></td>
					<td>R$ <?= number_format($salario[3][1], 2, ',', '.'); ?></td>
					<td>R$ <?= number_format($salario[3][2], 2, ',', '.'); ?></td>
					<td>R$ <?= number_format($salario[3][3], 2, ',', '.'); ?></td>
					<td>R$ <?= number_format($salario[3][4], 2, ',', '.'); ?></td>
					<td>R$ <?= number_format($salario[3][5], 2, ',', '.'); ?></td>
					<td class="tb_titulo">R$ <?= number_format($comissao[3], 2, ',', '.'); ?></td>
					<td class="tb_titulo">R$ <?= number_format($comis1 = $soma4 * 0.05, 2, ',', '.'); ?></td>
					<td class="tb_titulo">R$ <?= number_format($salario[3][1] + $comis1, 2, ',', '.'); ?></td>
				</tr>
		
			</tbody>

		</table>
	</div>
</div>	
	
</body>
</html>
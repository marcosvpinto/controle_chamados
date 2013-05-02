<?php 

	echo heading($headline, 2);
	echo br();
	//echo $data_data_table; 
	
	echo '<table class="table table-striped table-bordered table-hover">';
	echo '<tr><th>Editar</th><th>Pessoa</th><th>Máquina</th><th>Severidade</th><th>Abertura</th><th>Fechamento</th><th>Descrição</th><th>Apagar</th></tr>';
	foreach ($data_table->result() as $chamado)
	{
		if($chamado->DATA_FECHAMENTO == 0)
		{
			if($chamado->SEVERIDADE == 'Parado')
				$class = 'class="error"';
			elseif($chamado->SEVERIDADE == 'Parcial')
				$class = 'class="warning"';
			elseIF($chamado->SEVERIDADE == 'Funcionando')
				$class = 'class="info"';
		}
		else
		{
			$class = "class=success";
		}
		echo '<tr '.$class.' >';
		echo '<td>'.anchor('Chamado/edit/' . $chamado->ID_CHAMADO, '<span class="ui-icon ui-icon-pencil"></span>').'</td>';
		echo '<td>'.$chamado->PESSOA.'</td>';
		echo '<td>'.$chamado->MAQUINA.'</td>';
		echo '<td>'.$chamado->SEVERIDADE.'</td>';
		if($chamado->DATA_ABERTURA == 0)
			echo '<td></td>'; 
		else 
			echo '<td>'.unix_to_human(mysql_to_unix($chamado->DATA_ABERTURA)).'</td>';
		if($chamado->DATA_FECHAMENTO == 0)
			echo '<td></td>'; 
		else 
			echo '<td>'.unix_to_human(mysql_to_unix($chamado->DATA_FECHAMENTO)).'</td>';
		echo '<td>'.$chamado->DESCRICAO.'</td>';
		echo '<td>'.anchor('Chamado/delete/' . $chamado->ID_CHAMADO, '<span class="ui-icon ui-icon-trash"></span>', 
						"onClick=\" return confirm('Tem certeza que deseja remover o registro?')\"").'</td>';
		echo '</tr>';
	}
	echo '</table>';
	
/* End of file chamado_listagem.php */
/* Location: ./system/application/views/chamado_listagem.php */
<?php 

	echo form_open('Chamado/update', 'class="form-cadastro"');
	echo form_hidden('ID_CHAMADO', $chamados[0]->ID_CHAMADO);
	
	echo heading($headline, 3, 'class="form-cadastro-heading"');
	echo br();
	
	echo ('<select name="PESSOA" title="Login do usuário" class="input-block-level input-xlarge" required>');
	foreach($pessoas->result() as $pessoa):
		echo ('<option value="'.$pessoa->ID_PESSOA.'"'); 
			if($pessoa->ID_PESSOA == $chamados[0]->ID_PESSOA) 
				echo ('selected="selected"');
			echo('>'.$pessoa->PESSOA.'</option>');
	endforeach;
	echo ('</select>');
	
	echo ('<select name="MAQUINA" title="Número da máquina defeituosa" class="input-block-level input-xlarge" required>');
	foreach($maquinas->result() as $maquina):
		echo ('<option value="'.$maquina->ID_MAQUINA.'"');
			if($maquina->ID_MAQUINA == $chamados[0]->ID_MAQUINA) 
				echo ('selected="selected"');
			echo('>'.$maquina->MAQUINA.'</option>');
	endforeach;
	echo ('</select>');
	
	echo ('<select name="SEVERIDADE" title="Nível de severidade do problema" class="input-block-level input-xlarge" required>');
	foreach($niveis->result() as $nivel):
		echo ('<option value="'.$nivel->ID_NIVEL.'"');
			if($nivel->ID_NIVEL == $chamados[0]->ID_NIVEL) 
				echo ('selected="selected"');
			echo('>'.$nivel->SEVERIDADE.' - '.$nivel->NIVEL.'</option>');
	endforeach;
	echo ('</select>');
	
	echo form_textarea('DESCRICAO', $chamados[0]->DESCRICAO, 'title="Descreva com o máximo de detalhes o problema aqui" class="input-block-level input-xlarge" placeholder="Observações"');
	
	echo form_hidden('DATA_ABERTURA', $chamados[0]->DATA_ABERTURA);
	echo form_hidden('DATA_FECHAMENTO', date('Y-m-d H:i:s', now()));
	
	echo br();
	
	echo form_submit('', 'Fechar', 'class="btn btn-primary"'); 
	echo form_close();

/* End of file chamado_edit.php */
/* Location: ./system/application/views/chamado_edit.php */
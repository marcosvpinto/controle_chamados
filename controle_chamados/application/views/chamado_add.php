<?php 

	echo form_open('Chamado/create', 'class="form-cadastro"');
	
	echo heading($headline, 3, 'class="form-cadastro-heading"');
	echo br();
	
	echo ('<select name="pessoa" title="Login do usuário" class="input-block-level input-xlarge" required>');
	echo ('<option value="">Pessoa</option>');
	foreach($pessoas->result() as $pessoa):
		echo ('<option value="'.$pessoa->ID_PESSOA.'">'.$pessoa->PESSOA.'</option>');
	endforeach;
	echo ('</select>');
	
	echo ('<select name="maquina" title="Número da máquina defeituosa" class="input-block-level input-xlarge" required>');
	echo ('<option value="">Máquina</option>');
	foreach($maquinas->result() as $maquina):
		echo ('<option value="'.$maquina->ID_MAQUINA.'">'.$maquina->MAQUINA.'</option>');
	endforeach;
	echo ('</select>');
	
	echo ('<select name="severidade" title="Nível de severidade do problema" class="input-block-level input-xlarge" required>');
	echo ('<option value="">Severidade</option>');
	foreach($niveis->result() as $nivel):
		echo ('<option value="'.$nivel->ID_NIVEL.'">'.$nivel->SEVERIDADE.' - '.$nivel->NIVEL.'</option>');
	endforeach;
	echo ('</select>');
	
	echo form_textarea('descricao', '', 'title="Descreva com o máximo de detalhes o problema aqui" class="input-block-level input-xlarge" placeholder="Observações"');
	
	echo br();
	
	echo form_submit('', 'Abrir', 'class="btn btn-primary"'); 
	echo form_close();
	
/* End of file chamado_add.php */
/* Location: ./system/application/views/chamado_add.php */
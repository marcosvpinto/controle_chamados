<?php 

class MChamado extends CI_Model{

	function addChamado($data)
	{
		$this->db->insert('chamado', $data);
	}

	function listChamado()
	{
		$this->db->join('pessoa', 'chamado.PESSOA = pessoa.ID_PESSOA');
		$this->db->join('maquina', 'chamado.MAQUINA = maquina.ID_MAQUINA');
		$this->db->join('nivel', 'chamado.SEVERIDADE = nivel.ID_NIVEL');
		$this->db->order_by('ID_CHAMADO', 'desc');
		
		return $this->db->get('chamado');
	}

	function getChamado($id)
	{
		$this->db->join('pessoa', 'chamado.PESSOA = pessoa.ID_PESSOA');
		$this->db->join('maquina', 'chamado.MAQUINA = maquina.ID_MAQUINA');
		$this->db->join('nivel', 'chamado.SEVERIDADE = nivel.ID_NIVEL');
		return $this->db->get_where('chamado', array('ID_CHAMADO'=> $id));
	}

	function updateChamado($id, $data)
	{
		$this->db->where('ID_CHAMADO', $id);
		$this->db->update('chamado', $data); 
	}

	function deleteChamado($id)
	{
		$this->db->where('ID_CHAMADO', $id);
		$this->db->delete('chamado'); 
	}

}

/* End of file mchamado.php */
/* Location: ./system/application/models/mchamado.php */
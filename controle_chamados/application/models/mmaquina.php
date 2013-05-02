<?php 

class MMaquina extends CI_Model{

	function addMaquina($data)
	{
		$this->db->insert('Maquina', $data);
	}

	function listMaquina()
	{
		return $this->db->get('Maquina');
	}

	function getMaquina($id)
	{
		return $this->db->get_where('Maquina', array('id'=> $id));
	}

	function updateMaquina($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('Maquina', $data); 
	}

	function deleteMaquina($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('Maquina'); 
	}

}

/* End of file mMaquina.php */
/* Location: ./system/application/models/mMaquina.php */
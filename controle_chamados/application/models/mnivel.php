<?php 

class MNivel extends CI_Model{

	function addNivel($data)
	{
		$this->db->insert('Nivel', $data);
	}

	function listNivel()
	{
		return $this->db->get('Nivel');
	}

	function getNivel($id)
	{
		return $this->db->get_where('Nivel', array('id'=> $id));
	}

	function updateNivel($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('Nivel', $data); 
	}

	function deleteNivel($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('Nivel'); 
	}

}

/* End of file mNivel.php */
/* Location: ./system/application/models/mNivel.php */
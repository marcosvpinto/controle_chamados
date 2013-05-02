<?php 

class MPessoa extends CI_Model{

	function addPessoa($data)
	{
		$this->db->insert('pessoa', $data);
	}

	function listPessoa()
	{
		return $this->db->get('pessoa');
	}

	function getPessoa($id)
	{
		return $this->db->get_where('pessoa', array('id_pessoa'=> $id));
	}

	function updatePessoa($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('pessoa', $data); 
	}

	function deletePessoa($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('Pessoa'); 
	}

}

/* End of file mpessoa.php */
/* Location: ./system/application/models/mpessoa.php */
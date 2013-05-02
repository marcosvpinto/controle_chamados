<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chamado extends CI_Controller {

	public function Chamado()
	{
		parent::__construct();
	}
	
	public function index()
	{
        $data['title'] = "Página Inicial - Controle de Chamados";
        $data['headline'] = "Controle de Chamados";
        $data['include'] = "chamado_index";
		$this->load->view('template', $data);
	}
	
	function add()
    {
        $data['title'] = "Abrir Chamado - Controle de Chamados";
        $data['headline'] = "Abertura de Chamados";
        $data['include'] = "chamado_add";
		$this->load->model('MPessoa', '', TRUE);
		$data['pessoas'] = $this->MPessoa->listPessoa();
		$this->load->model('MMaquina', '', TRUE);
		$data['maquinas'] = $this->MMaquina->listMaquina();
		$this->load->model('MNivel', '', TRUE);
		$data['niveis'] = $this->MNivel->listNivel();
        $this->load->view('template', $data);
    }
	
	function create()
    {
        $this->load->model('MChamado','',TRUE);
        $this->MChamado->addChamado($_POST);
        redirect('Chamado/listing', 'refresh');
    }
	
	function edit()
	{
		$id = $this->uri->segment(3);
		$this->load->model('MChamado', '', TRUE);
		$data['chamados'] = $this->MChamado->getChamado($id)->result();
		$data['title'] = "Modificar Chamado - Controle de Chamados";
		$data['headline'] = "Edição de Chamados";
		$data['include'] = "chamado_edit";
		$this->load->model('MPessoa', '', TRUE);
		$data['pessoas'] = $this->MPessoa->listPessoa();
		$this->load->model('MMaquina', '', TRUE);
		$data['maquinas'] = $this->MMaquina->listMaquina();
		$this->load->model('MNivel', '', TRUE);
		$data['niveis'] = $this->MNivel->listNivel();
		$this->load->view('template', $data);
	}
	
	function update()
	{
		$this->load->model('MChamado','',TRUE);
		$this->MChamado->updateChamado($_POST['ID_CHAMADO'], $_POST);
		redirect('Chamado/listing', 'refresh');
	}
	
	function delete()
	{
		$id = $this->uri->segment(3);
		$this->load->model('MChamado','',TRUE);
		$this->MChamado->deleteChamado($id);
		redirect('chamado/listing', 'refresh');
	}
	
	function listing()
	{
		$this->load->model('MChamado','',TRUE);
		$data['data_table'] = $this->MChamado->listChamado();
		$data['title'] = "Listagem de Chamados - Controle de Chamados";
		$data['headline'] = "Listagem de Chamados";
		$data['include'] = 'chamado_listing';
		$this->load->view('template', $data);
	}
	
}

/* End of file Chamado.php */
/* Location: ./application/controllers/Chamado.php */
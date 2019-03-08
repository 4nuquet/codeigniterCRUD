<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Item_model');
	}

	public function index()
	{
		$this->load->view('index');
	}


	public function create(){

		if($this->input->is_ajax_request()){
			
			$data = array(
				'item_name' => $this->input->post('item'),
				'item_stock' => $this->input->post('mount'),
				'item_state' => $this->input->post('state'),
				'item_locate' => $this->input->post('locate'),
				'item_info' => $this->input->post('info'),
			);

			$res = $this->Item_model->create($data);
				if ($res) {
					$data = "Registro Exitoso";
				}else{
					 $data = "Error al Registrado Articulo";
				}
		}
		echo json_encode($data);
	}

	public function show(){
		
		$mount = 10;

		if ($this->input->is_ajax_request()) 
		{
			$word = $this->input->post("word");
			$no_pag = $this->input->post('no_pag');
			$init = ($no_pag - 1) * $mount;

			$res = array(
						'data' => $this->Item_model->show($word, $init, $mount),
						'total' => $this->Item_model->pagination(),
						'mount' => $mount
						);

			echo json_encode($res);		
		}
	}



	public function edit(){
		if($this->input->is_ajax_request()){
			
			$id = $this->input->post("id");
		
			$res = $this->Item_model->edit($id);

		}
		echo json_encode ($res);	
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct()
    {
    	
        parent::__construct();
       
    }

    public function index()
    {
    	$this->load->model('contact_model');
		$dl = $this->contact_model->getAll();
		$dl = array('dlnhan' => $dl);
        $this->load->view('contact_list',$dl, FALSE);
    }
    public function add()
    {
		$name = $this->input->post('name');
		$phone1 = $this->input->post('phone1');
		$phone2 = $this->input->post('phone2');
		$email = $this->input->post('email');
		$fb = $this->input->post('fb');
		$company = $this->input->post('company');
		$this->load->model('contact_model');
		$a=$this->contact_model->add($name,$phone1,$phone2,$email,$fb,$company);
		
		if (isset($a)) {
			// echo 'thanh cong';
			$this->load->view('themtc_view');
		}else{
			echo 'sua? lai di';
		}
    }
    public function edit($id){
    	$this->load->model('contact_model');
		//lay du lieu tu model up tam vao view de xem de sua
		$data = $this->contact_model->getedit($id);
		$data = array('dl' => $data);
		// load view
		$this->load->view('contact_edit', $data, FALSE);

	}
	public function contact_do_edit(){
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$phone1 = $this->input->post('phone1');
		$phone2 = $this->input->post('phone2');
		$email = $this->input->post('email');
		$fb = $this->input->post('fb');
		$company = $this->input->post('company');
		$this->load->model('contact_model');
		$this->contact_model->doEdit($id,$name,$phone1,$phone2,$email,$fb,$company);
		if ($this->contact_model->doEdit($id,$name,$phone1,$phone2,$email,$fb,$company)) {
			$this->load->view('themtc_view');
		}else {
			echo 'lam lai';
		}

	}
	public function delete($id){
		$this->load->model('contact_model');
		$this->contact_model->delete($id);
		if ($this->contact_model->delete($id)) {
			$this->load->view('xoa_view');
		}else {
			echo 'lam lai';
		}
	}

}

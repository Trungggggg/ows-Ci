<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contact_model extends CI_Model
{
    public function __construct()
	{
		parent::__construct();
		
	}
	public function add($name,$phone1,$phone2,$email,$fb,$company){
		$data = array('name' => $name, 'phone1' => $phone1 ,'phone2' => $phone2,'email' =>$email,'fb' => $fb,'company' => $company);
		$this->db->insert('contacts', $data);
		return $this->db->insert_id();
	}
    public function getAll()
    {
        $this->db->select('*');
		$this->db->order_by('id', 'desc');
		$this->db->limit(20,0);
		$dl = $this->db->get('contacts');
		$dl= $dl->result_array();
		return $dl;
    }
    
	public function getEdit($id){
		$this->db->select('*');
		$this->db->where('id', $id);
		$data = $this->db->get('contacts');
		// var_dump($data);
		$data = $data->result_array();
		return $data;
	}
	public function doEdit($id,$name,$phone1,$phone2,$email,$fb,$company){

		$dl = array('name' => $name,'phone1' => $phone1, 'phone2' =>$phone2, 'email' => $email,'fb' => $fb,'company' => $company);
		$this->db->where('id', $id);
		return $this->db->update('contacts', $dl);
	}
	public function delete($id){
		$this->db->where('id', $id);
		// unlink("uploads/".$);
		return $this->db->delete('contacts');
	}   
}

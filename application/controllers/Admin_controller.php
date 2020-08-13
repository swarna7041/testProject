<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url','form','date'));
        $this->load->database();
        $this->load->model('Admin_model');

    }
	

	public function index()
	{
		$this->load->view('login');
	}

	public function login_submit()
	{
		$userid=$this->input->post('userid');
		$password=$this->input->post('password');
		$result=$this->Admin_model->login_submit($userid,$password);
		
		if(count($result)>0){
			$session_data=array(
				'id'=>$result[0]->id,
				'name' => $result[0]->name,
				'userid'=>$result[0]->id,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($session_data);
			;
			redirect('Admin_controller/dashboard');
		}
		else{
			$session_data=array(
				'id'=>"",
				'userid'=>"",
				'logged_in'=>FALSE
				);
			$this->session->set_userdata($session_data);
			$this->session->set_flashdata('error', 'Invalid Username Or Password');
			$this->load->view('login');
		}

		
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Admin_controller');	
		
	}
	
	public function dashboard()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('dashboard');		
	}

	public function manage_products()
	{		
	    $this->data['products'] =$this->Admin_model->get_products();
	    $this->data['pro'] =$this->Admin_model->get_productsdata();
		$this->load->view('header');
		$this->load->view('sidebar',$this->data);
		$this->load->view('manage_products',$this->data);		
	}	

	public function add_user()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('add_user');
		
	}

	public function add_user_submit()
	{ 
		$name=$this->input->post('name');
		$password=$this->input->post('password');
		$batch=$this->input->post('batch');
		$email=$this->input->post('email');		
		
		$result=$this->Admin_model->add_user_submit($name,$password,$batch,$email);
		redirect('Admin_controller/add_user');	
	}

	public function add_notes()
	{	
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('add_notes');		
	}

	public function add_note_submit()
	{ 
		$note_title=$this->input->post('note_title');
		$note_description=$this->input->post('note_description');
		$result=$this->Admin_model->add_note_submit($note_title,$note_description);
		redirect('Admin_controller/add_notes');
	}

	
}
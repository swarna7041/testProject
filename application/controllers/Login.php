<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	 function __construct(){
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url','form','date'));
        $this->load->database();
        $this->load->model('Login_model');

    }
	

	public function index()
	{
		$this->load->view('index_page');       
        $this->load->view('header');       
	}

	public function add_users()
	{	
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('add_user');
		
	}

	public function add_users_submit()
	{ 
		$name=$this->input->post('name');
		$password=$this->input->post('password');
		$batch=$this->input->post('batch');
		$email=$this->input->post('email');		
		
		$result=$this->Login_model->add_users_submit($name,$password,$batch,$email);
		redirect('Login/index');
	
	}

	public function view_notes()
	{	
		$this->data['notes'] = $this->Login_model->get_notes();
		$this->load->view('header');
		$this->load->view('view_notes', $this->data);		
	}

	public function login_submits()
	{
		$userid=$this->input->post('userid');
		$password=$this->input->post('password');
		$result=$this->Login_model->login_submits($userid,$password);
		
		if(count($result)>0){
			$session_data=array(
				'id'=>$result[0]->id,
				'name' => $result[0]->name,
				'userid'=>$result[0]->id,
				'logged_in'=>TRUE
				);
			$this->session->set_userdata($session_data);
			;
			redirect('Login/view_notes');
		}
		else{
			$session_data=array(
				'id'=>"",
				'userid'=>"",
				'logged_in'=>FALSE
				);
			$this->session->set_userdata($session_data);
			$this->session->set_flashdata('error', 'User not Register');
			redirect('Login/index');
		}

		
	}

	public function get_userdata()
    {
        echo json_encode ( $this->Login_model->get_userdata ($this->input->post ('keyword')) ); 
        
    }


	
}

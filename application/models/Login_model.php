<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function add_users_submit($name,$password,$batch,$email)
    {
        $data = array(
            'name'=>$name,
            'password' => md5($password),
            'batch' => $batch,
            'email' => $email            
        );
        $this->db->insert('user', $data);
    }

    public function login_submits($userid,$password){

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('name', $userid);
        $this->db->where('password', md5($password));
        $query = $this->db->get();
        $result= $query->result();
        return $result;

    }

    public function get_userdata($keyword) {
        $this->db->select('c.name, c.id,c.batch');
        $this->db->from('user as c');        
        $this->db->like('c.name', $keyword);
        $this->db->like('c.batch', $keyword);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_notes(){

        $this->db->select('*');
        $this->db->from('note');
        $query = $this->db->get();
        $result= $query->result();
        return $result;

    }
	
}

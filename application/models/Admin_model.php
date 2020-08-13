<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {


   public function login_submit($userid,$password){

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('name', $userid);
        $this->db->where('password', md5($password));
        $query = $this->db->get();
        $result= $query->result();
        return $result;

    }    
   

    public function add_user_submit($name,$password,$batch,$email)
    {
        $data = array(
            'name'=>$name,
            'password' => md5($password),
            'batch' => $batch,
            'email' => $email            
        );
        $this->db->insert('user', $data);
    }

    public function add_note_submit($note_title,$note_description)
    {
        $data = array(
            'note_title'=>$note_title,
            'note_description' => $note_description
        );
        $this->db->insert('note', $data);
    }   
	
}

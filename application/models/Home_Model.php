<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');
  //require_once(APPPATH.'/interfaces/IBase.php');  
  class Home_Model extends CI_Model 
  {
    public function __construct()
    {
      parent::__construct();  
    }     
    public function country(){
       $this->db->select('*');
       $this->db->from('country_master');
       $query = $this->db->get();
       $result = $query->result();
       return $result;
    }
    public function state(){
       $this->db->select('*');
       $this->db->from('state_master');
       $query = $this->db->get();
       $result = $query->result();
       return $result;
    }
    public function city(){
       $this->db->select('*');
       $this->db->from('city_master');
       $query = $this->db->get();
       $result = $query->result();
       return $result;
    } 
    public function education(){
       $this->db->select('*');
       $this->db->from('education_master');
       $query = $this->db->get();
       $result = $query->result();
       return $result;
    }
    public function save_data($tbl_name, $data){
    $this->db->insert($tbl_name, $data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
    }
    function check_login($email, $password){
    $query = $this->db->select('*')
      ->where('username', $email)
      ->where('password', md5($password))
      ->from('user_master')
      ->get();
    $result = $query->result_array();
    return $result;
  }
    
  } 
  
?>
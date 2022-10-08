<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{		
		parent::__construct();	
		$this->load->model(['Home_Model']);			 
	}

	public function index()
	{
		$user_id = $this->session->userdata('user_id');
	 	$data['Country']=$this->Home_Model->country();
	 	$data['State']=$this->Home_Model->state();
	 	$data['City']=$this->Home_Model->city();
	 	$data['Education']=$this->Home_Model->education();
		$this->load->view('common/header');
		$this->load->view('index',$data);
		$this->load->view('common/footer');
	}
	// user registration
	public function add_user(){

    $this->form_validation->set_rules('username', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {

      $password = $this->input->post('password');
      $username = $this->input->post('username');
      $mobileno = $this->input->post('mobileno');


    


      $data_view = array(
    
            'username' => $username,
            'mobileno' => $mobileno,
            'password' =>  md5($password),
   
        );

      $this->Home_Model->save_data('user_master',$data_view);

    
   
      $this->session->set_flashdata('save_success','success');
      
    }
    $this->load->view('common/header');
    $this->load->view('index');
    $this->load->view('common/footer');

  }
   public function login(){
    // print_r($_POST);
    $this->form_validation->set_rules('email', 'username', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'password', 'trim|required');
    if ($this->form_validation->run() == FALSE) {
    	    $this->load->view('common/header');
		    $this->load->view('index');
		    $this->load->view('common/footer');
    } else{
      $email = $this->input->post('username');
      $password = $this->input->post('password');

      $login = $this->Home_Model->check_login($email, $password);
      // print_r($login);
      if($login == null){
        $this->session->set_flashdata('msg','login_error');
        header('location:'.base_url().'Home');
      } else{
        // echo 'null not';
     		$this->session->set_flashdata('login_success','success');
     		$this->session->set_userdata('user_id', $login[0]['id']);
            $this->load->view('common/header');
		    $this->load->view('index');
		    $this->load->view('common/footer');
      }
    }
  }

   
   

}

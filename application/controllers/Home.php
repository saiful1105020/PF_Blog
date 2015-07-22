<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	 
	 public function __construct() 
     {
          parent::__construct();
		  
		  //1. Load Necessary Libraries and helpers
          
		  $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
		  $this->load->library('form_validation');
		  $this->load->database();
		  
		  //2. Load Models
		  
		  //3. Load Template
		  $this->load->view('templates/header');
     }
	 
	public function index()	
	{
		$this->load->view('blog');
		$this->load->view('footer');
	}
	
	public function viewPost($post_id)	
	{
	
	}

	public function entry(){
		$_SESSION['title'] = $this->input->post('add_post_title');
		$_SESSION['content'] = $this->input->post('add_post_content');
		$_SESSION['subtitle'] = $this->input->post('add_post_subtitle');
		
		redirect('home/login','refresh');
		
		$this->load->view('footer');
	}
	
	public function login()
	{
		$this->load->view('login');
		
		$this->load->view('footer');
	}
	
	public function entry_proc()
	{
		$user_name=$this->input->post('user_name');
		$password=$this->input->post('password');
		
		$password=md5($password);
		
		$sql="select user_id from writer where username=? and password=?";
		$result=$this->db->query($sql,array($user_name,$password));
		
		if($result->num_rows()!=1)
		{
			redirect('home/login','refresh');
		}
		
		$temp=$result->row_array();
		$pid=$temp['user_id'];
		
		$sql = "insert into post(poster_id,title,subtitle,time, content) values (?,?,?,CURRENT_TIMESTAMP,?)";
		$this->db->query($sql,array($pid,$_SESSION['title'],$_SESSION['subtitle'],$_SESSION['content']));
		
		unset(
			$_SESSION['title'],
			$_SESSION['subtitle'],
			$_SESSION['content']
		);
		
		//View Success Message
		$this->load->view('successMessage');
		
		
		$this->load->view('footer');
	}

	public function newPost()
	{
		$this->load->view('newentry');
		$this->load->view('footer');
		
	}
}

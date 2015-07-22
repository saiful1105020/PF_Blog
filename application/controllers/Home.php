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
		  
		  //2. Load Models
		  
		  //3. Load Template
		  $this->load->view('templates/header');
     }
	 
	public function index()	
	{
		$this->load->view('blog');
	}
	
	public function viewPost($post_id)
	{
	
	}
	
	public function newPost()
	{
		
	}
}

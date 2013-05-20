<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Site extends CI_Controller {

	
	public function index()
	{
		$this->load->view('home');
	}
	public function home(){
		$this->load->view('home');
	}
	public function about(){
		$this->load->view('about');
	}
	public function rules(){
		$this->load->view('rules');
	}
	public function contact(){
		$this->load->view('contact');
	}
	public function register(){
		$this->load->view('register');
	}
	public function photogallery(){
		$this->load->view('photogallery');
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{   
		$this->load->view('include/header');
		$this->load->view('front/index');
		$this->load->view('include/certified');
		$this->load->view('include/footer');
	}

	public function about()
	{   
		$this->load->view('include/header');
		$this->load->view('front/about-us');
		$this->load->view('include/learn_about_our_it');
		$this->load->view('include/certified');
		$this->load->view('include/footer');
	}





	public function contact()
	{   
		$this->load->view('include/header');
		$this->load->view('front/contact-us');
		$this->load->view('include/learn_about_our_it');
		$this->load->view('include/certified');
		$this->load->view('include/footer');
	}

	public function location()
	{   
		$this->load->view('include/header');
		$this->load->view('front/location');
		// $this->load->view('include/learn_about_our_it');
		// $this->load->view('include/certified');
		$this->load->view('include/footer');
	}

	public function start_project()
	{   
		$this->load->view('include/header');
		$this->load->view('front/start_a_project');
		$this->load->view('include/learn_about_our_it');
		$this->load->view('include/certified');
		$this->load->view('include/footer');
	}


	public function packaging()
	{   
		$this->load->view('include/header');
		$this->load->view('front/packaging');
		$this->load->view('include/learn_about_our_it');
		$this->load->view('include/certified');
		$this->load->view('include/footer');
	}


	public function transportation()
	{   
		$this->load->view('include/header');
		$this->load->view('front/transportation');
		$this->load->view('include/learn_about_our_it');
		$this->load->view('include/certified');
		$this->load->view('include/footer');
	}

	public function itad()
	{   
		$this->load->view('include/header');
		$this->load->view('front/itad');
		$this->load->view('include/learn_about_our_it');
		$this->load->view('include/certified');
		$this->load->view('include/footer');
	}


	public function project_manager()
	{   
		$this->load->view('include/header');
		$this->load->view('front/project_manager');
		$this->load->view('include/learn_about_our_it');
		$this->load->view('include/certified');
		$this->load->view('include/footer');
	}
	
}
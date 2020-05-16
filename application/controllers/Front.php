<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	
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

	public function login(){

		if(isset($_POST['loginForm'])){
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if ($this->form_validation->run() == FALSE)
			{
				$errorData = array(
					'errors' => validation_errors()
				);

				$this->session->set_flashdata($errorData);
				redirect('login');
					
			}
			else
			{
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$user_id = $this->User_model->login_user($username, $password);

				if($user_id){
					$user_data = array(
						'user_id' => $user_id,
						'username' => $user_id,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);
					redirect('front/about');
				}else{
				$this->session->set_flashdata('errors','Invalid Username or Password');
				redirect('login');
				}
				
			}
			
		}else{
		$this->load->view('include/header');
		$this->load->view('front/user_login');
		$this->load->view('include/footer');
	}

	}
	
}
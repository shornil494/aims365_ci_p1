<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		redirect('Home/Homepage');
	}

	public function Homepage(){
		$data = array(); 

		$this->load->model('Siteinfo_model'); 

		//$data['sizeinfo'] = $this->load->model->getsiteinfo_by_id($data); 
		$data['siteinfo'] = $this->Siteinfo_model->getsiteinfo_by_id($data);
		/*------------------------------------------------------------------*/
		$data['header'] = $this->load->view('included/header.php',$data); 
		$data['slider'] = $this->load->view('included/slider.php',$data); 
		$data['service'] = $this->load->view('included/service.php',$data); 
		$data['driver'] = $this->load->view('included/driver.php',$data); 
		$data['driver'] = $this->load->view('included/about.php',$data); 
		$data['driver'] = $this->load->view('included/team.php',$data); 

		$data['driver'] = $this->load->view('included/newsletter.php',$data); 
		$data['driver'] = $this->load->view('included/pricing.php',$data); 

		$data['driver'] = $this->load->view('included/portfolio.php',$data); 
		
		

		$data['driver'] = $this->load->view('included/footer.php',$data); 
		/*------------------------------------------------------------------*/
		$this->load->view('index',$data);

	}

	public function Aboutpage(){
		$data = array(); 

		$this->load->model('Siteinfo_model'); 

		//$data['sizeinfo'] = $this->load->model->getsiteinfo_by_id($data); 
		$data['siteinfo'] = $this->Siteinfo_model->getsiteinfo_by_id($data);
		/*------------------------------------------------------------------*/
		$data['header'] = $this->load->view('included/header.php',$data); 
		$data['slider'] = $this->load->view('included/slider.php',$data); 
		$data['service'] = $this->load->view('included/service.php',$data); 
		$data['driver'] = $this->load->view('included/driver.php',$data); 
		$data['driver'] = $this->load->view('included/about.php',$data); 
		$data['driver'] = $this->load->view('included/team.php',$data); 

		$data['driver'] = $this->load->view('included/newsletter.php',$data); 
		$data['driver'] = $this->load->view('included/pricing.php',$data); 

		$data['driver'] = $this->load->view('included/portfolio.php',$data); 
		
		

		$data['driver'] = $this->load->view('included/footer.php',$data); 
		/*------------------------------------------------------------------*/
		$this->load->view('index',$data);

	}

	public function Contactpage(){
		$data = array(); 

		$this->load->model('Siteinfo_model'); 

		//$data['sizeinfo'] = $this->load->model->getsiteinfo_by_id($data); 
		$data['siteinfo'] = $this->Siteinfo_model->getsiteinfo_by_id($data);
		/*------------------------------------------------------------------*/
		$data['header'] = $this->load->view('included/header.php',$data); 
		$data['slider'] = $this->load->view('included/slider.php',$data); 
		$data['service'] = $this->load->view('included/service.php',$data); 
		$data['driver'] = $this->load->view('included/driver.php',$data); 
		$data['driver'] = $this->load->view('included/about.php',$data); 
		$data['driver'] = $this->load->view('included/team.php',$data); 

		$data['driver'] = $this->load->view('included/newsletter.php',$data); 
		$data['driver'] = $this->load->view('included/pricing.php',$data); 

		$data['driver'] = $this->load->view('included/portfolio.php',$data); 
		
		

		$data['driver'] = $this->load->view('included/footer.php',$data); 
		/*------------------------------------------------------------------*/
		$this->load->view('index',$data);

	}


}

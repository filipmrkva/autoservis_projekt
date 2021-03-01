<?php
class Pages extends CI_Controller {

        public function view()
    {            
                $this->load->model('autoservis_model');
                $data['polozky'] = $this->autoservis_model->get_menu();
		$this->load->view('templates/header', $data);                
		$this->load->view('pages/home', $data);  
		$this->load->view('templates/footer');
	}
        public function home()
        {
                $this->load->model('autoservis_model');
                $data['polozky'] = $this->autoservis_model->get_menu();
                $this->load->view('templates/header', $data);                
		$this->load->view('pages/home', $data);  
		$this->load->view('templates/footer');
        }
}


<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Testing_breadcrumb extends CI_Controller {


	public function index()
	{
        $this->load->library('make_bread');
        $this->make_bread->add('first crumb', 'testing', 1);
        $this->make_bread->add('second crumb', 'the_test', 0);
        $this->make_bread->add('test','http://google.com');
        $breadcrumb = $this->make_bread->output();
        echo $breadcrumb;
        //$this->load->view('welcome_message');
	}
}

/* End of file Testing_breadcrumb.php */
/* Location: ./application/controllers/Testing_breadcrumb.php */
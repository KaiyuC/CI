<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *j	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

    public function test(){
    $this->load->model("baseModel");
    $data['result']=$this->baseModel->get_last_ten_user();
   // print_r($data);
    $this->load->view('test',$data);
    }

    public function insert(){
    $this->load->model('baseModel');
    $this->baseModel->insert_entry();
    }

    function testSmarty(){
        //testSmarty.html
        //$this->smartyview->render('index.html',array('title'=>'----smartyview'));
    $this->smartyview->render('testSmarty.html',array('title'=>'test--smartyview','t'=>array()));
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

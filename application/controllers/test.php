<?php
  Class test extends CI_Controller{
    
    public function index(){
        echo 111;
    }

    public function toShow(){
        $this->load->Model('testModel');
        $this->testModel->show();
    }

    public function testSmartyIndex(){
        echo $_GET['id'].'<br>';
        //$this->smartyview->assgin('data','hello world');
        $this->smartyview->show('testSmartyIndex.php');
        //$this->smartyview->render('testSmartyIndex.html'); 
    }
    public function getUri(){
        $arr=$this->uri->uri_to_assoc();  
        print_r($arr);        
        echo $this->uri->assoc_to_uri($arr);
    }
    
    public function showData(){
        //echo 100;
        $this->load->Model('testModel'); 
        $result=$this->testModel->getData();
        $arr=array();
        $num=count($result);
        for($i=0;$i<$num;$i++)
            foreach($result[$i] as $key=>$value ){
                $arr[$i][$key]=$value;
            }
        //print_r($arr);exit;
        $this->smartyview->render('testSmartyIndex.php',$arr[0]);
    }
    

}

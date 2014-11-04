<?php
    Class testModel extends CI_Model{
      
        public function __construct(){
            $this->db=$this->load->database('default',TRUE);
        }        

        public function getData(){
            //echo 111;
            $result=$this->db->FROM('user')->WHERE('u_id =','150')->get()->result();
            return $result;      
        }

    }

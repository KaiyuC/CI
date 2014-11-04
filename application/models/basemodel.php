<?php
class baseModel extends CI_Model {

    public $db = null;

    function __construct()
    {
        parent::__construct();
        $this->db  = $this->load->database('default', TRUE);
    }
    
    function get_last_ten_user()
    {   
        return $this->db->FROM('user')->WHERE('u_id >','150')->get()->result();

    }

    function insert_entry()
    {
        $this->u_name=$_POST['u_name'];
        $this->u_tel=$_POST['u_tel'];
        $this->db->insert('user', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('user', $this, array('id' => $_POST['id']));
    }

}

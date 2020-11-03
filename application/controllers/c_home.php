<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_home extends CI_Controller {
    public function display_home(){
        $home["isi"]= 'v_home.php';
        $this->load->view("v_template",$home);
	}
}
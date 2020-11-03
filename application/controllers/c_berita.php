<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_berita extends CI_Controller {
    public function display_berita(){
        $berita["isi"]= 'v_berita.php';
        $this->load->view("v_template",$berita);
	}
}
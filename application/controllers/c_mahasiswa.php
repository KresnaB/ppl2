<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_mahasiswa extends CI_Controller {

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
	public function __construct(){

		parent::__construct();
   
		// Load model
		$this->load->model('m_mahasiswa');
	 }
	public function getAllData()
	{
		$data['mahasiswa'] = $this->m_mahasiswa->getMahasiswa();
		$data['main_content'] = 'v_mahasiswa_display';
		$this->load->view('v_mahasiswa_display', $data);
	}
	public function form(){
        $this->load->view('v_mahasiswa_insert');
    }
	public function insertAksi()
	{
		$data = array(
            'nama'  =>  $this->input->post('nama'),
            'nim'   =>  $this->input->post('nim'),
            'umur'  =>  $this->input->post('umur')
        );

			$this->m_mahasiswa->insert($data);

			redirect("c_mahasiswa/getAllData");
	}
	public function search()
	{
		$cari = array(
            'cari'  =>  $this->input->post('cari_nama')
        );
		$data['mahasiswa'] = $this->m_mahasiswa->search($cari);
		$this->load->view('v_mahasiswa_display', $data);
	}
	public function detail($param)
	{
		$data['mahasiswa'] = $this->m_mahasiswa->detail($param);
		$this->load->view('v_mahasiswa_detail', $data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kecamatan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('Model_publikasi');
	}

	public function index()
	{
		$config['base_url']=base_url().'index.php/kecamatan/publikasi/';
		$config['total_rows']=$this->Model_publikasi->record_berita();
		$config['per_page']=3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links']=floor($choice);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data['berita']=$this->Model_publikasi->fetch_berita($config['per_page'], $page);
		$this->load->view('index', $data);
	}
	public function profil()
	{
		$this->load->view('profil');
	}
	public function peta()
	{
		$this->load->view('peta');
	}
	public function sejarah()
	{
		$this->load->view('sejarah');
	}
	public function visimisi()
	{
		$this->load->view('visimisi');
	}
	public function fasilitas()
	{
		$this->load->view('fasilitas');
	}
	public function publikasi()
	{
		$config['base_url']=base_url().'index.php/kecamatan/publikasi/';
		$config['total_rows']=$this->Model_publikasi->record_berita();
		$config['per_page']=5;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links']=floor($choice);

		$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data['pagination']= $this->pagination->create_links();

		$data['berita']=$this->Model_publikasi->fetch_berita($config['per_page'], $page);
		$this->load->view('publikasi', $data);
	}
	function tampilberita(){
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['datane'] = $this->Model_publikasi->getBlog($page);

		$this->load->view('berita', $data);
	}
}

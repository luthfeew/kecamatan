<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	public $data 	= 	array();
	function __construct(){
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('Model_publikasi');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}

		$this->load->helper('ckeditor');
		
		
		//Ckeditor's configuration
		$this->data['ckeditor'] = array(
			
			//ID of the textarea that will be replaced
			'id' 	=> 	'content',
			'path'	=>	'js/ckeditor',
			
			//Optionnal values
			'config' => array(
				'toolbar' 	=> 	"Full", 	//Using the Full toolbar
				'width' 	=> 	"0px",	//Setting a custom width
				'height' 	=> 	'0px',	//Setting a custom height
				
			),
			
			//Replacing styles from the "Styles tool"
			'styles' => array(
				
				//Creating a new style named "style 1"
				'style 1' => array (
					'name' 		=> 	'Blue Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 	=> 	'Blue',
						'font-weight' 	=> 	'bold'
					)
				),
				
				//Creating a new style named "style 2"
				'style 2' => array (
					'name' 	=> 	'Red Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 		=> 	'Red',
						'font-weight' 		=> 	'bold',
						'text-decoration'	=> 	'underline'
					)
				)				
			)
		);
		
		$this->data['ckeditor_2'] = array(
			
			//ID of the textarea that will be replaced
			'id' 	=> 	'content_2',
			'path'	=>	'js/ckeditor',
			
			//Optionnal values
			'config' => array(
				'width' 	=> 	"1000px",	//Setting a custom width
				'height' 	=> 	'1000px',	//Setting a custom height
				'toolbar' 	=> 	array(	//Setting a custom toolbar
					array('Bold', 'Italic'),
					array('Underline', 'Strike', 'FontSize'),
					array('Smiley'),
					'/'
				)
			),
			
			//Replacing styles from the "Styles tool"
			'styles' => array(
				
				//Creating a new style named "style 1"
				'style 3' => array (
					'name' 		=> 	'Green Title',
					'element' 	=> 	'h3',
					'styles' => array(
						'color' 	=> 	'Green',
						'font-weight' 	=> 	'bold'
					)
				)
				
			)
		);		
	}
	function inputberita(){
		$this->load->library('ckeditor');
		$this->load->library('ckfinder');



		$this->ckeditor->basePath = base_url().'asset/ckeditor/';
		$this->ckeditor->config['toolbar'] = array(
			array( 'Image')
		);

		$this->ckeditor->config['language'] = 'id';
		$this->ckeditor->config['width'] = '730px';
		$this->ckeditor->config['height'] = '300px';            

		//Add Ckfinder to Ckeditor
		$this->ckfinder->SetupCKEditor($this->ckeditor,'../../assets/ckfinder/');
		// $this->Model_publikasi->inputdata();
		$this->load->view('inputberita', $this->data);
	}
	function listberita(){
		$config['base_url']=base_url().'index.php/dashboard/table/';
		$config['total_rows']=$this->Model_publikasi->record_berita();
		$config['per_page']=10;
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
		$this->load->view('listberita', $data);
	}
	function nginput(){

		$this->Model_publikasi->inputdata($data);
		redirect('dashboard/inputberita');
	}
	public function edit($id){
        if($this->input->post('submit')){
            $this->Model_publikasi->update($id);
            redirect('dashboard/listberita');
          }

          $data= $this->data;

          $this->load->library('ckeditor');
          $this->load->library('ckfinder');
          
          
          
          $this->ckeditor->basePath = base_url().'assets/ckeditor/';
          // $this->ckeditor->config['toolbar'] = array(
          //                 array( 'Source', 'FontSize' ,'-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' )
          //                                                     );
          $this->ckeditor->config['language'] = 'english';
          $this->ckeditor->config['width'] = '100%';
          $this->ckeditor->config['height'] = '300px';            
          
          //Add Ckfinder to Ckeditor
          $this->ckfinder->SetupCKEditor($this->ckeditor,'../../assets/ckfinder/'); 
          $data['hasil'] = $this->Model_publikasi->getById($id);
          $this->load->view('editberita', $data);
    }
	function updatee($id){
		if($this->input->post('submit')){
			$this->Model_publikasi->update($id);
			redirect('dashboard');
		}
		$datane['hasil'] = $this->Model_publikasi->getById($id);
		$this->load->view('edit', $datane);
	}
	function del($id){
		//$this->load->model('Data_user');
		$this->Model_publikasi->del($id);

		redirect('dashboard/listberita');
    }
}
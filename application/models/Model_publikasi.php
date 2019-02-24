<?php

/**
 * 
 */
class Model_publikasi extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}
	function uploadgambar(){
		$namaunik = uniqid();
		$config['upload_path']          = './assets/images';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $namaunik;
		$config['overwrite']			= true;
    	$config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    	$this->load->library('upload', $config);
    	$this->upload->initialize($config);

    	  if ($this->upload->do_upload('gambar'))
                {
                    return $this->upload->data("file_name");
                }

    // return "default.jpg";

    	// $this->load->library('upload', $config);

    	// if ($this->upload->do_upload('gambar')) {
    	// 	return $this->upload->data("file_name");
    	// } 
    }
    function cek_login($table,$where){		
    	return $this->db->get_where($table,$where);
    }	
    function gets(){
    	return $this->db->get('berita')->result();
    }
    function record_berita(){
    	return $this->db->count_all('berita');
    }
    function fetch_berita($limit, $start){
    	$this->db->limit($limit, $start);
    	$this->db->order_by('id', "DESC");
    	$query = $this->db->get('berita');

    	if ($query->num_rows() > 0) {
    		foreach ($query->result() as $row) {
    			$data[] = $row;
    		}
    		return $data;
    	}
    	return false;
    }
    function getBlog($id)
    {
    	$data = array();
    	$options = array('id' => $id);
    	$Q = $this->db->get_where('berita',$options,1);
    	if ($Q->num_rows() > 0){
    		$data = $Q->row_array();
    	}
    	$Q->free_result();
    	return $data;
    }
	// private function uploadgambar(){
	// 	$gambarsatu = uniqid();
	// 	$config['upload_path']          = './assets/images';
	// 	$config['allowed_types']        = 'gif|jpg|png';
	// 	$config['file_name']            = $gambarsatu;
	// 	$config['max_size']             = 1024;
	// 	$config['overwrite']			= true;
	// 	// $config['max_width']            = 1024;
 //        // $config['max_height']           = 768;

	// 	$this->load->library('upload', $config);

	// 	if ($this->upload->do_upload('gambar')) {
	// 		return $this->upload->data("file_name");
	// 	} 
	// }

	// private function gambaree(){
	// 	$gambarsatue = uniqid();
	// 	$confige['upload_path']          = './assets/gambar1/';
	// 	$confige['allowed_types']        = 'gif|jpg|png';
	// 	$confige['file_name']            = $gambarsatue;
	// 	$confige['max_size']             = 1024;
	// 	$confige['overwrite']			= true;
	// 	// $config['max_width']            = 1024;
 //        // $config['max_height']           = 768;

	// 	$this->load->library('upload', $confige, 'gambarane');
	// 	$this->gambarane->initialize($confige);

	// 	if ($this->gambarane->do_upload('gambare')) {
	// 		return $this->gambarane->data("file_name");
	// 	} 
	// }

    function inputdata($data){
    	$day = date ("D");
    	switch ($day) {
    		case 'Sun' : $hari = "Minggu"; break;
    		case 'Mon' : $hari = "Senin"; break;
    		case 'Tue' : $hari = "Selasa"; break;
    		case 'Wed' : $hari = "Rabu"; break;
    		case 'Thu' : $hari = "Kamis"; break;
    		case 'Fri' : $hari = "Jum'at"; break;
    		case 'Sat' : $hari = "Sabtu"; break;
    		default : $hari = "Kiamat";
    	}
    	$judulberita=$this->input->post('judulberita');
    	$isiberita=$this->input->post('isiberita');
    	$tanggalupload = $hari.date(", d-m-Y");
    	$gambar=$this->input->post('gambar');
    	$data=array(
    		'judulberita' => $judulberita,
    		'isiberita' => $isiberita,
    		'tanggalupload' => $tanggalupload,
    		'gambar' => $gambar
    	);
    	$this->db->insert('berita', $data);
    }

    function update($id){
    	$day = date ("D");
    	switch ($day) {
    		case 'Sun' : $hari = "Minggu"; break;
    		case 'Mon' : $hari = "Senin"; break;
    		case 'Tue' : $hari = "Selasa"; break;
    		case 'Wed' : $hari = "Rabu"; break;
    		case 'Thu' : $hari = "Kamis"; break;
    		case 'Fri' : $hari = "Jum'at"; break;
    		case 'Sat' : $hari = "Sabtu"; break;
    		default : $hari = "Kiamat";
    	}
    	$judulberita = $this->input->post("judulberita");
    	$isiberita = $this->input->post("isiberita");
    	$tanggalupload = $hari.date(", d-m-Y");
        $gambar =  $this->input->post("gambar");

    	$datane = array (
    		'judulberita' => $judulberita,
    		'isiberita' => $isiberita,
    		'tanggalupload' => $tanggalupload,
            'gambar' => $gambar,
    	);

    	$this->db->where('id', $id);
    	$this->db->update('berita', $datane);
    }
    function getById($id) {
    	return $this->db->get_where('berita', array('id' => $id))->row();
    }
    function del($id){
    	$this->db->delete("berita", ["id"=>$id]);
    }

}

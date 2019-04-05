<?php 

class About extends Controller {

	public function index($nama = "ikbal",$status = "mahasiswa"){
		$data['nama'] = $nama;
		$data['status'] = $status;
		$this->view('about/index',$data);
	}

	public function page(){
		$this->view('about/page');
	}
}
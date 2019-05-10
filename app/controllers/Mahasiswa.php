<?php 

Class Mahasiswa extends Controller{

	public function index(){
		$data['judul'] = "Daftar Mahasiswa";
		$data['mhs'] = $this->model("Mahasiswa_model")->getAllMhs();
		$this->view('templates/header',$data);
		$this->view('Mahasiswa/index',$data);
		$this->view('templates/footer');
	}

	public function detail($npm){
		$data['judul'] = "Detail Mahasiswa";
		$data['mhs'] = $this->model("Mahasiswa_model")->getMahasiswa($npm);
		$this->view('templates/header',$data);
		$this->view('Mahasiswa/detail',$data);
		$this->view('templates/footer');
	}

	public function tambah(){
		if ($this->model("Mahasiswa_model")->tambahDataMahasiswa($_POST) > 0) {
			Flasher::setFlash("Berhasil","Ditambahkan","success");
			header("location: ".BASE_URL."mahasiswa");
			exit;
		}else{
			Flasher::setFlash("Gagal","Ditambahkan","danger");
			header("location: ".BASE_URL."mahasiswa");
			exit;
		}
	}

	public function hapus($npm){
		if ($this->model("Mahasiswa_model")->hapusDataMahasiswa($npm) > 0) {
			Flasher::setFlash("Berhasil","Dihapus","success");
			header("location: ".BASE_URL."mahasiswa");
			exit;
		}else{
			Flasher::setFlash("Gagal","Ditambahkan","danger");
			header("location: ".BASE_URL."mahasiswa");
			exit;
		}
	}

	public function getUbah(){
		echo json_encode($this->model("Mahasiswa_model")->getMahasiswa($_POST['id']));
	}

	public function update(){
		if ($this->model("Mahasiswa_model")->updateDataMahasiswa($_POST) > 0) {
			Flasher::setFlash("Berhasil","Diubah","success");
			header("location: ".BASE_URL."mahasiswa");
			exit;
		}else{
			Flasher::setFlash("Gagal","Ditambahkan","danger");
			header("location: ".BASE_URL."mahasiswa");
			exit;
		}
	}

	public function cari(){
		$data['judul'] = "Daftar Mahasiswa";
		$data['mhs'] = $this->model("Mahasiswa_model")->getCariMhs($_POST['cari']);
		$this->view('templates/header',$data);
		$this->view('Mahasiswa/index',$data);
		$this->view('templates/footer');
	}
}
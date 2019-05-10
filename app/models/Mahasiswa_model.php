<?php 

Class Mahasiswa_model{

	private $tabel = 'mahasiswa';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getAllMhs(){
		$this->db->query("SELECT * FROM $this->tabel");
		return $this->db->resultSet();
	}

	public function getMahasiswa($npm){
		$this->db->query("SELECT * FROM $this->tabel WHERE npm = $npm");
		return $this->db->single();
	}

	public function tambahDataMahasiswa($data){
		$query = "INSERT INTO $this->tabel VALUES (:nama,:email,:jurusan,'')";
		$this->db->query($query);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('email',$data['email']);
		$this->db->bind('jurusan',$data['jurusan']);
		

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusDataMahasiswa($data){
		$query = "DELETE FROM $this->tabel WHERE npm = :npm";
		$this->db->query($query);
		$this->db->bind('npm',$data);
		
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataMahasiswa($data){
		$query = "UPDATE $this->tabel SET nama = :nama, email = :email, jurusan = :jurusan WHERE npm = :npm";
		$this->db->query($query);
		$this->db->bind('npm',$data['npm']);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('email',$data['email']);
		$this->db->bind('jurusan',$data['jurusan']);
		
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function getCariMhs($data){
		$query = "SELECT * FROM $this->tabel WHERE nama LIKE :nama";
		$this->db->query($query);
		$this->db->bind('nama',"%$data%");

		$this->db->execute();

		return $this->db->resultSet();

	}
}
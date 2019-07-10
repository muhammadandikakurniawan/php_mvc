<?php

class Siswa extends Controller
{
	public function index(){
		$data['judul'] = 'siswa';
		$data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
		$this->view('template/header',$data);
		$this->view('siswa/index',$data);
		$this->view('template/footer');

	}

	public function detail($id){
		$data['judul'] = 'Detail siswa';
		$data['siswa'] = $this->model('Siswa_model')->getSiswaById($id);
		$this->view('template/header',$data);
		$this->view('siswa/detail',$data);
		$this->view('template/footer');

	}

	public function tambah(){
		if($this->model('Siswa_model')->tambahDataSiswa($_POST) > 0){
			header('Location: '.BASEURL.'/siswa');
			exit;
		}
		var_dump($this->model('Siswa_model')->tambahDataSiswa($_POST));
	}
}

?>
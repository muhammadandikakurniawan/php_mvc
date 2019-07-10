<?php

	class About extends Controller
	{

		public function page()
		{

			echo "About/Page";
		}

		public function index($nama='nama',$jurusan='jurusan')
		{
			$data['nama'] = $nama;
			$data['jurusan'] = $jurusan;
			$data['judul'] = 'About';
			$this->view("template/header",$data);
			$this->view('about/index',$data);
			$this->view("template/footer");
		}
	}

?>
<?php

	class Siswa_model
	{
		private $table = 'siswa',
				$db;

		public function __construct(){
			$this->db = new Database();
		}
		public function getAllSiswa(){
			$this->db->query(" SELECT * FROM $this->table ");
			return $this->db->resultSet();
		}

		public function getSiswaById($id){
			$this->db->query("SELECT * FROM $this->table WHERE id=:id");
			$this->db->bind(':id',$id);
			return $this->db->single();
		}

		public function tambahDataSiswa($data){
			$query = "INSERT INTO siswa VALUES ('',:nama,:nisn,:email,:jurusan)";
			$this->db->query($query);
			$this->db->bind('nama',$data['nama']);
			$this->db->bind('nisn',$data['nisn']);
			$this->db->bind('email',$data['email']);
			$this->db->bind('jurusan',$data['jurusan']);

			$this->db->execute();

			return $this->db;

		}
	}

?>
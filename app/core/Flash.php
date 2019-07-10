<?php

	class Flash
	{
		$_SESSION['flash'] = [
		 			'pesan' => $pesan,
		 			'aksi'  => $aksi,
		 			'tipe'  => $tipe
		 	];

		 public static function flash($pesan, $aksi, $tipe){	
		 	if (isset($_SESSION['flash'])) {
		 		echo "<div class="alert alert-warning alert-dismissible fade show" role="alert">
  					 <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				 <span aria-hidden="true">&times;</span>
 					 </button>
			</div>";
		 	}
		 }
	}

?>
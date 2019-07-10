<div class="container mt-5">
	
	<div class="row">
		<div class="col-6">

			<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  tambah data
</button>
<br><br>
			<h3>Daftar Siswa</h3>
				<ul class="list-group">
			<?php foreach ($data['siswa'] as $siswa) { ?>	
  				<li class="list-group-item d-flex justify-content-between align-items-center">
  					<?= $siswa['nama'] ?>
  					<a href="<?= BASEURL ?>/siswa/detail/<?= $siswa['id']; ?>" class="badge badge-primary">detail</a>
  				</li>	
			<?php } ?>
				</ul>
		</div>
	</div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-group" method="post" action="<?= BASEURL; ?>/siswa/tambah">

        	<div class="form-group">
    			<label for="nama">Nama</label>
    			<input type="text" class="form-control" id="nama" name="nama" >
  			</div>

  			<div class="form-group">
    			<label for="nisn">Nisn</label>
    			<input type="number" class="form-control" id="nisn" name="nisn" >
  			</div>

  			<div class="form-group">
    			<label for="email">Email</label>
    			<input type="email" class="form-control" id="email" name="email" >
  			</div>

  			<div class="form-group">
   			 <label for="jurusan">Jurusan</label>
   			 <select class="form-control" id="jurusan" name="jurusan">
      			<option value="TKJ">TEKNIK KOMPUTER DAN JARINGAN</option>
      			<option value="TKR">TEKNIK KENDARAAN RINGAN</option>
      			<option value="TKBB">TEKNIK KONSTRUKSI BATU BETON</option>
      			<option value="TAV">TEKNIK AUDIO VIDEO</option>
    			</select>
  			 </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan data</button>
      </div>
      </form>
    </div>
  </div>
</div>

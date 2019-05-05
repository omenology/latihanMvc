<div class="container mt-4">
	<h3>Daftar Mahasiswa</h3>
	<div class="row">
		<div class="col-6">
			<?php Flasher::flash(); ?>
		</div>			
	</div>
	<div class="row">
		<div class="col-6">
			<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahData">Tambah Data</button>
			<ul class="list-group">
				<?php foreach($data['mhs'] as $mhs): ?>
				<li class="list-group-item "><?= $mhs['nama'] ?>
					<a onclick="return confirm('yakin');" class="badge badge-danger mr-1 float-right" href="<?= BASE_URL ?>mahasiswa/hapus/<?= $mhs['npm'] ?>">hapus</a>
					<a class="badge badge-primary mr-1 float-right" href="<?= BASE_URL ?>mahasiswa/detail/<?= $mhs['npm'] ?>">detail</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?=BASE_URL; ?>mahasiswa/tambah" method="POST">
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="Text" class="form-control" id="nama" name="nama">
					</div>
					<div class="form-group">
						<label >Email</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
						<label >Jurusan</label>
						<select class="form-control" id="jurusan" name="jurusan">
							<option value="informatika">Informatika</option>
							<option value="industri">Industri</option>
							<option value="Sipil">Sipil</option>
						</select>
					</div>
				
			</div>
			<div class="modal-footer">
				<button type="submite" class="btn btn-primary">Tambahkan</button>
				</form>
			</div>
		</div>
	</div>
</div>
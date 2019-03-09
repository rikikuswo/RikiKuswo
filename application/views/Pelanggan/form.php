<form action="<?php echo site_url("pelanggan/submit"); ?>" method="POST">
	<div class="form-group">
		<label>Nama Pelanggan</label>
		<input type="text" name="namaPelanggan" class="form-control" value="<?php echo(isset($data_pelanggan[0]->namaPelanggan)? $data_pelanggan[0]->namaPelanggan:''); ?>" placeholder="Nama Pelanggan">
	</div>
	<div class="form-group">
		<label>Email Address</label>
		<input type="text" name="email" class="form-control" value="<?php echo(isset($data_pelanggan[0]->email)? $data_pelanggan[0]->email:''); ?>" placeholder="Email">
	</div>
	<div class="form-group">
		<label>Telepon</label>
		<input type="number" name="telpon" class="form-control" value="<?php echo(isset($data_pelanggan[0]->telpon)? $data_pelanggan[0]->telpon:''); ?>" placeholder="Telepon">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control"><?php echo(isset($data_pelanggan[0]->alamat)? $data_pelanggan[0]->alamat:''); ?></textarea>
	</div>
	<input type="hidden" name="idPelanggan" value="<?php echo(isset($data_pelanggan[0]->pelangganId)? $data_pelanggan[0]->pelangganId:''); ?>"><button type="submit" class="btn btn-primary">Proses Data</button>
</form>
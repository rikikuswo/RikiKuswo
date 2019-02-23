<form action="<?php echo site_url("produk/submit"); ?>" method="POST">
	<div class="form-group">
		<label>Nama Produk</label>
		<input type="text" name="nmProduk" class="form-control" placeholder="Nama Produk">
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="number" name="harga" class="form-control" placeholder="Harga">
	</div>
	<div class="form-group">
		<label>Satuan</label>
		<input type="text" name="satuan" class="form-control" placeholder="Satuan">
	</div>
	<div class="form-group">
		<label>Qty</label>
		<input type="number" name="qty" class="form-control" placeholder="Qty">
	</div>
	<div class="form-group">
		<label>Image</label>
		<input type="text" name="img" class="form-control" placeholder="Image">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea name="deskripsi" class="form-control"></textarea>
	</div>


	<button type="submit" class="btn btn-primary">Proses Data</button>
</form>
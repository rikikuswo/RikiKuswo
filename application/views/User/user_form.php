<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="#">
		<div class="form-group">
			<label for="level">Level</label>
			<?php echo form_dropdown('level', $user); ?>
			<!-- <select class="form-control" name="level">
				<option value="">Pilih Level</option>
				</select>-->			
		</div> 
		<div class="form-group">
			<label for="pwd">Nama</label>
			<input type="text" class="form-control" id="nama" name="nama">
		</div>
		<div class="form-group">
			<label for="divisi">Divisi</label>
			<input type="text" class="form-control" id="divisi" name="divisi">
		</div>
		<button type="submit" class="btn btn-info">Submit</button>
	</form>
</body>
</html>
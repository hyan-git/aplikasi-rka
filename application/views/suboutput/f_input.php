<?= form_open('suboutput/post'); ?>
<div class="col-xs-12 col-sm-4">
	<br>
	<div class="widget-box">
		<div class="widget-header">
			<h4 class="widget-title">Tambah Data Suboutput</h4>
		</div>
		<div class="widget-body">
			<div class="widget-main">
				<div>
					<label for="form-field-9">Divisi</label><br>
					<select name="divisi" class="form-control">
						<?php foreach ($divisi->result() as $k): ?>
							<option value="<?= $k->id_divisi; ?>"><?= $k->deskripsi ?></option>
						<?php endforeach ?>

					</select>
				</div>
				<br>
				<div>
					<label for="form-field-8">Nama Suboutput</label>
					<input required name="nama" class="form-control" placeholder="Suboutput"></input>
				</div>

				
				<hr>
				<div>
					<button class="btn btn-success" type="submit" name="submit">
						Simpan
					</button>


				</div>
			</div>
		</div>
	</div>
</div>


<div>
	<br>
	<div class="hidden-sm hidden-xs action-buttons">
		<a href="<?= base_url('index.php/divisi/post'); ?>"><button class="btn btn-info" >Tambah Divisi</button></a>
	</div>
	<br>
	<div class="center table-header">
		Table Divisi			
	</div>
	<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
		
		<table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
			<thead>
				<tr role="row">
					<th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="">
						No
					</th>
					<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">Kode Divisi</th>
					<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Update : activate to sort column descending" aria-sort="ascending">
						<i class="ace-icon bigger-110 hidden-480"></i>Nama Divisi
					</th>
					<th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="">Opration	</th>

				</tr>
			</thead>

			<tbody>
				<?php 
				$no=1;
				foreach ($record->result() as $d): ?>
				
				<tr role="row" class="odd">

					<td class="center">
						<?= $no; ?>
					</td>
					<td>
						<?= $d->nama; ?>
					</td>
					<td>
						<?= $d->deskripsi; ?>
					</td>
					<td class="center">
						<div class="hidden-sm hidden-xs action-buttons">
							<a class="green" href="<?= base_url('index.php/divisi/edit/'.$d->id_divisi); ?> ">
								<i class="ace-icon fa fa-pencil bigger-130"></i>
							</a>

							<a onclick="return confirm('apakah anda yakin menghapus data ini ?')" class="red" href="<?= base_url('index.php/divisi/delete/'.$d->id_divisi); ?> ">
								<i class="ace-icon fa fa-trash-o bigger-130"></i>
							</a>
						</div>

					</td>
				</tr>
			</tbody>
			<?php 
			$no++;
			endforeach ?>							
		</table>
	</div>
</div>
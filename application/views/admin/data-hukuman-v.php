<div style="margin-top: 14px; background-color: white;padding: 30px">
	<div class="media">
		<div class="media-body">
			<h4>Disiplin</h4>
		</div>
		<div class="media-right">
			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addhukuman"><i class="fa fa-plus-circle"></i> Tambah Data Disiplin</button>
		</div>
	</div>
	<hr/>
	<div class="table-responsive">
	<table id="add-row" class="display table table-striped table-hover">>
		<thead>
			<tr>
				<td class="text-center">No</td>
				<td class="">Uraian</td>
				<td class="">No SK</td>
				<td class="">Tgl SK</td>
				<td class="">Tgl Mulai</td>
				<td class="">Tgl Selesai</td>
				<td class="">No SK Pembatalan</td>
				<td class="" colspan="2">Aksi</td>
			</tr>
		</thead>
		<tbody>
			<?php if ($hukuman == TRUE): ?>
				<?php $no = 1 ?>
				<?php foreach ($hukuman as $data): ?>
					<tr>
						<td class=" text-center"><?php echo $no; ?></td>
						<td class=""><?php echo $data->uraian; ?></td>
						<td class=""><?php echo $data->nomor_sk; ?></td>
						<td class=""><?php echo date('d F Y', strtotime($data->tanggal_sk)); ?></td>
						<td class=""><?php echo date('d F Y', strtotime($data->tanggal_mulai)); ?></td>
						<td class=""><?php echo date('d F Y', strtotime($data->tanggal_selesai)); ?></td>
						<td class=""><?php echo $data->no_sk_pembatalan; ?></td>
						<td class="">
							<a href="<?php echo base_url('index.php/admin/pegawai/edit_hukuman/'.$hasil->id_pegawai.'/'.$data->id_hukuman) ?>" class="text-success"><img src="<?php echo base_url('asset/img/icons8-edit.svg') ?>" width="30" height="30" rel="tooltip" title="Edit"></a>
						</td>
						<td class="">
							<a href="<?php echo base_url('index.php/admin/pegawai/delete_hukuman/'.$hasil->id_pegawai.'/'.$data->id_hukuman) ?>" class="text-danger"><img src="<?php echo base_url('asset/img/icons8-trash-can.svg') ?>" width="30" height="30" rel="tooltip" title="Hapus"></a>
						</td>
					</tr>
					<?php $no++ ?>
				<?php endforeach ?>
			<?php else: ?>
				<tr>
					<td class=" text-center" colspan="8">Belum ada data hukuman</td>
				</tr>
			<?php endif ?>
		</tbody>
	</table>
</div >
</div>
<!-- Modal -->
<div class="modal fade" id="addhukuman" tabindex="-1" role="dialog" aria-labelledby="addhukuman" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addhukuman">Tambah Data Hukuman</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo base_url('index.php/admin/pegawai/create_hukuman/'.$hasil->id_pegawai) ?>" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="text-info" for="uraian">URAIAN</label>
								<input type="text" class="form-control border-dark" id="uraian" name="uraian" placeholder="URAIAN" >
							</div>
							<div class="form-group">
								<label class="text-info" for="nomor_sk">NOMOR SK</label>
								<input type="text" class="form-control border-dark" id="nomor_sk" name="nomor_sk" placeholder="NOMOR SK" >
							</div>
							<div class="form-group">
								<label class="text-info" for="tanggal_sk">TANGGAL SK</label>
								<div class="row">
									<div class="col-md-4">
										<input type="text" class="form-control border-dark" id="tanggal_sk" name="tanggal_sk_hr" placeholder="HH">
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control border-dark" id="tanggal_sk" name="tanggal_sk_bln" placeholder="BB">
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control border-dark" id="tanggal_sk" name="tanggal_sk_thn" placeholder="TTTT">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="text-info" for="tanggal_mulai">TANGGAL MULAI</label>
								<div class="row">
									<div class="col-md-4">
										<input type="text" class="form-control border-dark" id="tanggal_mulai" name="tanggal_mulai_hr" placeholder="HH" >
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control border-dark" id="tanggal_mulai" name="tanggal_mulai_bln" placeholder="BB" >
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control border-dark" id="tanggal_mulai" name="tanggal_mulai_thn" placeholder="TTTT">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="text-info" for="tanggal_selesai">TANGGAL SELESAI</label>
								<div class="row">
									<div class="col-md-4">
										<input type="text" class="form-control border-dark" id="tanggal_selesai" name="tanggal_selesai_hr" placeholder="HH" >
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control border-dark" id="tanggal_selesai" name="tanggal_selesai_bln" placeholder="BB" >
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control border-dark" id="tanggal_selesai" name="tanggal_selesai_thn" placeholder="TTTT">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="text-info" for="no_sk_pembatalan">NO SK PEMBATALAN</label>
								<input type="text" class="form-control border-dark" id="no_sk_pembatalan" name="no_sk_pembatalan" placeholder="NO SK PEMBATALAN">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" name="submit" value="submit" class="btn btn-success">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
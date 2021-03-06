<div style="margin-top: 14px; background-color: white;padding: 30px">
	<div class="media">
		<div class="media-body">
			<h4>Riwayat pangkat</h4>
		</div>
		<div class="media-right">
			<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addrpangkat"><i class="icon-plus"></i>&nbsp; Tambah Data Riwayat pangkat</button>
		</div>
	</div>
	<hr/>
	<div class="table-responsive">
	<table id="add-row" class="display table table-striped table-hover">
		<thead>
			<tr>
				<td class="p-1 text-center">No</td>
				<td class="p-1 text-center">Pangkat</td>
				<td class="p-1 text-center">No SK</td>
				<td class="p-1 text-center">Tgl SK</td>
				<td class="p-1 text-center">Masa Kerja</td>
				<td class="p-1 text-center">Upload</td>
				<td class="p-1 text-center">Status</td>
				<td class="p-1 text-center" colspan="2">Aksi</td>
			</tr>
		</thead>
		<tbody>
			<?php if ($rpangkat == TRUE): ?>
				<?php $no = 1 ?>
				<?php foreach ($rpangkat as $data): ?>
					<tr>
						<td class=" text-center"><?php echo $no; ?></td>
						<td class=""><?php echo @$this->Admin_m->detail_data_order('master_pangkat','id_pangkat',$data->id_pangkat)->nm_pangkat; ?></td>
						<td class=""><?php echo $data->nomor_sk; ?></td>
						<td class=""><?php echo date('d F Y', strtotime($data->tanggal_sk)) ; ?></td>
						<td class=""><?php echo $data->masa_kerja; ?></td>
						<td class=""><?php echo $data->upload; ?></td>
						<td class=""><?php echo $data->status_pangkat; ?></td>
						<td class=" text-center" width="50px">
							<a href="<?php echo base_url('index.php/admin/pegawai/edit_rpangkat/'.$hasil->id_pegawai.'/'.$data->id_riwayat_pangkat) ?>" class="text-success"><img src="<?php echo base_url('asset/img/icons8-edit.svg') ?>" width="30" height="30" rel="tooltip" title="Edit"></a>
						</td>
						<td class=" text-center" width="50px">
							<a href="<?php echo base_url('index.php/admin/pegawai/delete_rpangkat/'.$hasil->id_pegawai.'/'.$data->id_riwayat_pangkat) ?>" class="text-danger"><img src="<?php echo base_url('asset/img/icons8-trash-can.svg') ?>" width="30" height="30" rel="tooltip" title="Hapus"></a>
						</td>
					</tr>
					<?php $no++ ?>
				<?php endforeach ?>
				<?php else: ?>
					<tr>
						<td class=" text-center" colspan="7">Belum ada data Riwayat pangkat</td>
					</tr>
				<?php endif ?>
			</tbody>
		</table>
	</div>
		<!-- Modal -->
		<div class="modal fade" id="addrpangkat" tabindex="-1" role="dialog" aria-labelledby="addrpangkat" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="addrpangkat">Tambah Data Riwayat pangkat</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?php echo base_url('index.php/admin/pegawai/create_rpangkat/'.$hasil->id_pegawai) ?>" method="post">
						<div class="modal-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="text-info" for="id_pangkat">PANGKAT</label>
										<select class="form-control border-dark" name="id_pangkat">
											<?php foreach ($pangkat as $data): ?>
												<option value="<?php echo $data->id_pangkat ?>"><?php echo $data->nm_pangkat; ?></option>
											<?php endforeach ?>
										</select>
									</div>
									<div class="form-group">
										<label class="text-info" for="status">STATUS</label>
										<input type="text" class="form-control border-dark" id="status" name="status" placeholder="STATUS">
									</div>
									<div class="form-group">
										<label class="text-info" for="nomor_sk">NOMOR SK</label>
										<input type="text" class="form-control border-dark" id="nomor_sk" name="nomor_sk" placeholder="NOMOR SK">
									</div>
									<div class="form-group">
										<label class="text-info" for="tanggal_sk">TANGGAL SK</label>
										<div class="row">
											<div class="col">
												<input type="text" class="form-control border-dark" id="tanggal_sk" name="tanggal_sk_hr" placeholder="HH" >
											</div>
											<div class="col">
												<input type="text" class="form-control border-dark" id="tanggal_sk" name="tanggal_sk_bln" placeholder="BB" >
											</div>
											<div class="col">
												<input type="text" class="form-control border-dark" id="tanggal_sk" name="tanggal_sk_thn" placeholder="TTTT">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="text-info" for="tmt_pangkat">TANGGAL MULAI</label>
										<div class="row">
											<div class="col">
												<input type="text" class="form-control border-dark" id="tanggal_mulai" name="tanggal_mulai_hr" placeholder="HH" >
											</div>
											<div class="col">
												<input type="text" class="form-control border-dark" id="tanggal_mulai" name="tanggal_mulai_bln" placeholder="BB" >
											</div>
											<div class="col">
												<input type="text" class="form-control border-dark" id="tanggal_mulai" name="tanggal_mulai_thn" placeholder="TTTT">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="text-info" for="tanggal_bkn">TANGGAL SELESAI</label>
										<div class="row">
											<div class="col">
												<input type="text" class="form-control border-dark" id="tanggal_selesai" name="tanggal_selesai_hr" placeholder="HH" >
											</div>
											<div class="col">
												<input type="text" class="form-control border-dark" id="tanggal_selesai" name="tanggal_selesai_bln" placeholder="BB" >
											</div>
											<div class="col">
												<input type="text" class="form-control border-dark" id="tanggal_selesai" name="tanggal_selesai_thn" placeholder="TTTT">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="text-info" for="masa_kerja">MASA KERJA</label>
										<input type="text" class="form-control border-dark" id="masa_kerja" name="masa_kerja" placeholder="MASA KERJA">
									</div>
									<div class="form-group">
										<label class="text-info" for="masa_kerja_bulan">MASA KERJA BULAN</label>
										<input type="text" class="form-control border-dark" id="masa_kerja_bulan" name="masa_kerja_bulan" placeholder="MASA KERJA BULAN">
									</div>
									<div class="form-group">
										<label class="text-info" for="masa_kerja_tahun">MASA KERJA TAHUN</label>
										<input type="text" class="form-control border-dark" id="masa_kerja_tahun" name="masa_kerja_tahun" placeholder="MASA KERJA TAHUN">
									</div>
									<div class="form-group">
										<label class="text-info">Upload SK</label>
										<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="fotop" id="uploadBtn">
									</div>
									
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
	</div >
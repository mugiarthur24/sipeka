<div class="p-4">
	<div class="card">
		<div class="card-body">
			<div class="col-md-12">
				<div class="media-body">
					<h4>Laporan Data Honorer / Magang</h4>
				</div>
				<div>
					<a href="<?php echo base_url('index.php/admin/honorer/ctk_honorer') ?>" class="btn btn-info" target="_blank">Cetak</a>
				</div>
			</div>
			<hr/>
			<div class="table-responsive">
			<table class="w-100" border="1" style="font-size: 13px;">
				<tr>
					<td class="text-center">No</td>
					<td class="text-center">Nama</td>
					<td class="text-center">Tempat Lahir</td>
					<td class="text-center">Tgl Lahir</td>
					<td class="text-center">TMT</td>
					<td class="text-center">TAT</td>
					<td class="text-center">Unit Kerja Induk</td>
				</tr>
				</tr>
				<?php $no = 1 ?>
				<?php foreach ($skpd as $data): ?>
					<tr>
						<td class="text-center"><?php echo $no; ?></td>
						<td class="text-center"><?php echo @$data->nama; ?></td>
						<td class="text-center"><?php echo @$data->tempat_lahir; ?></td>
						<td class="text-center"><?php echo @$data->tanggal_lahir; ?></td>
						<td class="text-center"><?php echo @$data->tmt; ?></td>
						<td class="text-center"><?php echo @$data->tat; ?></td>
						<td class="text-left"><?php echo $data->nama_satuan_kerja; ?></td>
					</tr>
			
			<?php $no++ ?>
			<?php endforeach ?>
			</table>
		</div>
		</div>
	</div>
</div>

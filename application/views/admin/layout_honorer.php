<div style="margin-top: 14px; background-color: white;padding: 30px">
	<div class="col-md-12">
		<div class="media-body">
			<h4>Laporan Data Honorer</h4>
		</div>
	</div>

	<hr/>
	<table class="table table-bordered table-hover table-sm">
		<?php
		$table = '				

		<tr class="table-success">
		<th>No.</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>TMT</th>
		<th>TAT</th>
		<th>Nomor HP</th>
		<th>Lokasi Kerja</th>
		
		<th>Nomor HP</th>
		</tr>';


		$no = 1;
		foreach ($datas as $d) {
			$table .= '
			<tr>
			<td class="p-1">'.$no++.'</td>
			<td class="p-1">'.$d->nama.'</td>
			<td class="p-1">'.$d->alamat.'</td>
			<td class="p-1">'.$d->tempat_lahir.'</td>
			<td class="p-1">'.$d->tanggal_lahir.'</td>
			<td class="p-1">'.$d->tmt.'</td>
			<td class="p-1">'.$d->tat.'</td>
			<td class="p-1">'.$d->no_hp.'</td>
			<td class="p-1">'.$this->Admin_m->detail_data_order('master_lokasi_kerja','id_lokasi_kerja',$d->id_lokasi_kerja)->lokasi_kerja.'</td>			
			</tr>';
		}
		$table .='
		</table>';

		echo $table;
		?>
		<a href="<?php echo base_url('index.php/admin/export/dataexcel_honorer') ?>" class="btn btn-success">Export menjadi file excel</a>
</table>
</div>

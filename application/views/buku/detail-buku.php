<div class="x_panel"align="center">
	<div class="x_content">
		<div class="row">
			<div class="col-sm-3col-md-3">
				<div class="thumbnail"style="height:auto;position:relative;left:80%;width:100%;">
					<img src="<?php echo base_url();?>assets/img/upload/<?= $gambar;?>" style="max-width:200%;max-height:200%;height:250px;width:220px">
					<div class="caption"> <h5 style="min-height:60px;"align="center"><?= $pengarang ?></h5><center>
						<table class="tabletable-stripped">
							<tr> 
								<th nowrap>JudulBuku:</th> 
								<td nowrap><?=$judul;?></td> 
								<td>&nbsp;</td>
								<th>Kategori:</th>
								<td><?=$kategori?></td>
							</tr>
							<tr>
								<th nowrap>Penerbit:</th>
								<td><?=$penerbit?></td>
								<td>&nbsp; </td>
								<th>Dipinjam:</th>
								<td><?=$dipinjam?></td>
							</tr>
							<tr>
								<th nowrap>TahunTerbit:</th>
								<td><?=substr($tahun, 0, 4) ?></td>
								<td>&nbsp;</td>
								<th>Dibooking:</th>
								<td><?= $dibooking ?></td>
							</tr>
							<tr>
								<th>ISBN:</th>
								<td><?= $isbn ?></td>
								<td>&nbsp;</td>
								<th>Tersedia:</th>
								<td><?=$stok?></td>
							</tr>
						</table>
					</center>
					<p>
						<?php
						if ( $stok < 1) {
							echo "<i class= 'disabled btn btn-outline-primary fas fw fa-meteor'>Stok Kosong</i>";
					} else {
							echo "<a class='btn btn-outline-primary fas fw fa-shopping-cart'href='" . base_url('booking/tambahBooking/' . $id) . "'>Booking</a>";}?>
						<span class="btn btn-outline-secondary fas fw fa-reply"onclick="window.history.go(-1)">Kembali</span>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
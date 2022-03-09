<?php
	ob_start();
	include"../inc/config.php";
	validate_admin_not_login("login.php");
	{
		include"inc/header.php";
	}
?>

<div class="container">
	<h4>Laporan Penjualan</h4>
	<div class="row">
		<table class="table table-striped" border="1">
			<tr>
				<th width="20px">No</th>
				<th width=>Nama</th>
				<th>Tanggal Tempo</th>
				<th>Tanggal Pesan</th>
				<th>Total</th>
				<th>Ongkir</th>
				<th>Status</th>
			</tr>
			
			<tbody>
				<?php
					$totalSemua = 0;
					$totalOngkir = 0;
					$no = 0;
					$q = mysqli_query($GLOBALS["___mysqli_ston"], "Select pesanan.* from pesanan order by id desc") or die (mysqli_error($GLOBALS["___mysqli_ston"]));
					while ($data = mysqli_fetch_object($q)) {
						$totalHarga = 0;
						$no++;
						$q2 = mysqli_query($GLOBALS["___mysqli_ston"], "Select detail_pesanan.*, produk.harga from detail_pesanan INNER JOIN produk ON detail_pesanan.produk_id = produk.id where pesanan_id = '$data->id'") or die (mysqli_error($GLOBALS["___mysqli_ston"]));
						while ($d = mysqli_fetch_object($q2)) {
							$totalHarga += $d->harga * $d->qty;
						}
						$totalSemua += $totalHarga;
						$totalOngkir += $data->ongkir;
						?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $data->nama; ?></td>
							<td><?php echo $data->tanggal_digunakan; ?></td>
							<td><?php echo $data->tanggal_pesan; ?></td>
							<td><?php echo "Rp. " .number_format($totalHarga, 2, ",", "."); ?></td>
							<td><?php echo "Rp. " .number_format($data->ongkir, 2, ",", "."); ?></td>
							<td><?php echo $data->status; ?></td>
						</tr>
						<?php
					}
				?>
				<tr>
					<td colspan="4" align="right">
						<font size="3">
							<b>TOTAL</b>
						</font>
					</td>
					<td>
						<font size="3"><b><?php echo "Rp. ". number_format($totalSemua, 2, ",", "."); ?></b></font>
					</td>
					<td>
						<font size="3">
							<b><?php echo "Rp. ". number_format($totalOngkir, 2, ",", "."); ?></b>
						</font>
					</td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<?php
	include"inc/footer.php";
?>

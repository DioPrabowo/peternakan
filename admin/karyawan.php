
<h2>Data Karyawan</h2>


<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Password</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM karyawan"); ?>
		<?php while ($pecah = $ambil->fetch_assoc()) { ?> 
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_karyawan']; ?></td>
			<td><?php echo $pecah['email_karyawan']; ?></td>
			<td><?php echo $pecah['telepon_karyawan']; ?></td>
			<td><?php echo $pecah['password_karyawan']; ?></td>
			<td>
				<a href="index.php?halaman=hapus_karyawan&id=<?php echo $pecah['id_karyawan']; ?>" 
				class="btn btn-danger">hapus</a>
				<a href="index.php?halaman=ubah_karyawan&id=<?php echo $pecah['id_karyawan']; 
				?>" class="btn btn-warning">ubah</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambah_data&" class="btn btn-primary">Tambah Data</button></a>
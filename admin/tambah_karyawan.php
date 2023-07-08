<h2>Tambah Karyawan</h2>

<form action="tambah_karyawan.php" method="get">
	

	<label>Nama</label><br>
	<input type="text" name="nama" placeholder="masukan nama anda"><br>

	<label>Email</label><br>
	<input type="text" name="email" placeholder="masukan email anda"><br>

	<label>Telepon</label><br>
	<input type="text" name="telepon" placeholder="masukan telepon anda"><br>

	<label>Password</label><br>
	<input type="text" name="password" placeholder="masukan password anda"><br>

	<button class="button btn-primary" type="submit">Tambah</button>
</form>


<?php include "koneksi.php";
if(!empty($_GET['nama'])){

	$nama=$_GET['nama'];
	$email=$_GET['email'];
	$telepon=$_GET['telepon'];
	$password=$_GET['password'];

	$simpan=$koneksi->query("INSERT INTO `karyawan`(`nama_karyawan`, `email_karyawan`, `telepon_karyawan`, `password_karyawan`) VALUES ('$nama','$email','$telepon','$password')");
	if ($simpan) {
	echo "sukses";
	echo "<script>location.href='index.php?halaman=karyawan'</script>";
	}
	else{
		echo 'gagal';
	}
}

 ?>
 
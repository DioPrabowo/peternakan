<h2>Ubah Karyawan</h2>
<?php
$ambil=$koneksi->query("SELECT * FROM karyawan WHERE id_karyawan='$_GET[id]'");
$pecah= $ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Email Karyawan</label>
        <input type="text" nama="nama" class="form-control" value="<?php echo $pecah['nama_karyawan']; ?>">
    </div> 
    <div class="form-group">
        <label>Password Karyawan</label>
        <input type="text" nama="email" class="form-control" value="<?php echo $pecah['email_karyawan']; ?>">
    </div> 
    <div class="form-group">
        <label>Nama Karyawan</label>
        <input type="text" nama="password" class="form-control" value="<?php echo $pecah['password_karyawan']; ?>">
    </div> 
    <div class="form-group">
        <label>Telepon Karyawan</label>
        <input type="text" nama="telepon" class="form-control" value="<?php echo $pecah['telepon_karyawan']; ?>">
    </div> 
    <button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) 
{   
    {
        $koneksi->query("UPDATE karyawan SET nama_karyawan='$_POST[nama]',
        email_karyawan='$_POST[email]', password_karyawan='$_POST[password]',
        telepon_karyawan='$_POST[telepon]' WHERE id_karyawan='$_GET[id]'");
    }
    echo "<script>alert('data karyawan telah diubah');</script>";
    echo "<script> location='index.php?halaman=karyawan';</script>";
}
?>
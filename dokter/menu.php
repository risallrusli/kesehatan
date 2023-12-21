<?php 
  require '../koneksi.php';

if (!isset($_SESSION['sebagai'])) {
    echo "<script>alert('Belum Masuk');</script>";
    echo "<script>window.location='../index.php'</script>";
}
elseif ($_SESSION['sebagai'] =="Apoteker") {
    echo "<script>alert('Bukan Hak Anda')</script>";
    echo "<script>window.location='../apoteker/menu.php'</script>";
}
elseif ($_SESSION['sebagai'] == "Admin") {
	echo "<script>alert('Bukan Hak Anda')</script>";
	echo "<string>window.location='../admin/menu.php'</script>";
}

$username = $_SESSION['username']['username'];

$ambil_user = $koneksi->query("SELECT * FROM user WHERE username = '$username' ");
$user = $ambil_user->fetch_assoc();
$ambil = $koneksi->query("SELECT * FROM user AS u JOIN poli AS p ON u.id_user = p.id_user WHERE u.id_user = '$user[id_user]'");
$user_poli = $ambil->fetch_assoc();
$_SESSION['dokter'] = $user_poli;
// var_dump($user_poli);die;

include 'header.php'; 
?>
<div class="content-wrapper">
    <section class="content container-fluid">
        <?php
	if(isset($_GET['halaman'])) {
		if ($_GET['halaman'] == "rekam") {
			include 'rekam/rekam.php';
		} elseif ($_GET['halaman'] == "info") {
			include'rekam/info.php';
		}elseif ($_GET['halaman'] == "edit_rekam") {
				include 'rekam/edit_rekam.php';
		}elseif ($_GET['halaman'] == "laporan") {
		include '../laporan/laporan.php';
		}elseif ($_GET['halaman'] == "jadwal") 
		{
			include 'jadwal/jadwal.php';
		} 
		elseif ($_GET['halaman'] == "tambah_jadwal") 
		{
			include 'jadwal/tambah_jadwal.php';
		}
		elseif ($_GET['halaman'] == "hapus_jadwal") 
		{
			include 'jadwal/hapus_jadwal.php';
		} 
		elseif ($_GET['halaman'] == "edit_jadwal") 
		{
			include 'jadwal/edit_jadwal.php';
		} 
	} else {
		include 'home.php';
	}
		?>
    </section>
</div>
<?php include 'footer.php'?>
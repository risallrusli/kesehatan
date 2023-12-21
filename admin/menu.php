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
elseif ($_SESSION['sebagai'] == "Dokter") {
    echo "<script>alert('Bukan Hak Anda')</script>";
    echo "<script>window.location='../dokter/menu.php'</script>";
}
 include 'header.php' ?>

<div class="content-wrapper">
    <section class="content container-fluid">
        <?php
	if(isset($_GET['halaman'])) {
		if ($_GET['halaman'] == "user") 
		{
			include 'user/user.php';
		} 
		elseif ($_GET['halaman'] == "tambah_user") 
		{
			include 'user/tambah_user.php';
		} 
		elseif ($_GET['halaman'] == "hapus_user") 
		{
			include 'user/hapus_user.php';
		} 
		elseif ($_GET['halaman'] == "edit_user") 
		{
			include 'user/edit_user.php';
		} 
		elseif ($_GET['halaman'] == "apoteker") 
		{
			include 'apoteker/apoteker.php';
		} 
		elseif ($_GET['halaman'] == "tambah_apoteker") 
		{
			include 'apoteker/tambah_apoteker.php';
		}
		elseif ($_GET['halaman'] == "hapus_apoteker") 
		{
			include 'apoteker/hapus_apoteker.php';
		} 
		elseif ($_GET['halaman'] == "edit_apoteker") 
		{
			include 'apoteker/edit_apoteker.php';
		}
		//  
		elseif ($_GET['halaman'] == "jadwal") 
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
		// 
		elseif ($_GET['halaman'] == "dokter") 
		{
			include 'dokter/dokter.php';
		} 
		elseif ($_GET['halaman'] == "tambah_dokter") 
		{
			include 'dokter/tambah_dokter.php';
		}
		elseif ($_GET['halaman'] == "hapus_dokter") 
		{
			include 'dokter/hapus_dokter.php';
		} 
		elseif ($_GET['halaman'] == "edit_dokter") 
		{
			include 'dokter/edit_dokter.php';
		} 
		elseif ($_GET['halaman'] == "pasien") 
		{
			include 'pasien/pasien.php';
		} 
		elseif ($_GET['halaman'] == "detail_pasien") 
		{
			include 'pasien/detail_pasien.php';
		} 
		elseif ($_GET['halaman'] == "tambah_pasien") 
		{
			include 'pasien/tambah_pasien.php';
		} 
		elseif ($_GET['halaman'] == "hapus_pasien") 
		{
			include 'pasien/hapus_pasien.php';
		} 
		elseif ($_GET['halaman'] == "ubah_pasien") 
		{
			include 'pasien/ubah_pasien.php';
		} 
		elseif ($_GET['halaman'] == "tambah_rekam") 
		{
			include 'rekam/tambah_rekam.php';
		} 
		elseif ($_GET['halaman'] == "info") 
		{
			include 'rekam/info.php';
		}
		elseif ($_GET['halaman'] == "laporan") 
		{
			include '../laporan/laporan.php';
		}
		elseif ($_GET['halaman'] == "poli") 
		{
			include 'poli/poli.php';
		}
		elseif ($_GET['halaman'] == "tambah_poli") 
		{
			include 'poli/tambah_poli.php';
		}
		elseif ($_GET['halaman'] == "edit_poli") 
		{
			include 'poli/edit_poli.php';
		}
		elseif ($_GET['halaman'] == "hapus_poli") 
		{
			include 'poli/hapus_poli.php';
		}elseif ($_GET['halaman'] == "obat") {
			include 'obat/obat.php';
		} elseif ($_GET['halaman'] == "tambah_obat") {
			include 'obat/tambah_obat.php';
		} elseif ($_GET['halaman'] == "hapus_obat") {
			include 'obat/hapus_obat.php';
		} elseif ($_GET['halaman'] == "edit_obat") {
			include 'obat/edit_obat.php';
		}
	} else {
		include 'home.php';
	}

	?>
    </section>
</div>
<?php include 'footer.php' ?>
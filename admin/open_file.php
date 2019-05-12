<?php  
$page = isset($_GET['page']) ? $_GET['page'] : '';

switch ($page){
	
	case 'dashboard':
	if(!file_exists("dashboard.php"))die("file tidak ditemukan");
	include "dashboard.php";
	break;

	case 'identitas':
	if(!file_exists("konten/website/identitas.php"))die("File tidak ditemukan");
	include "konten/website/identitas.php";
	break;

	case 'cara-pendaftaran':
	if(!file_exists("konten/cara_pendaftaran/cara_pendaftaran.php"))die("file tidak ditemukan");
	include "konten/cara_pendaftaran/cara_pendaftaran.php";
	break;

	case 'informasi-psb':
	if(!file_exists("konten/informasi_psb/informasi_psb.php"))die("file tidak ditemukan");
	include "konten/informasi_psb/informasi_psb.php";
	break;

	case 'psb':
	if(!file_exists("konten/psb/psb.php"))die("file tidak ditemukan");
	include "konten/psb/psb.php";
	break;

	case 'detail-psb':
	if(!file_exists("konten/psb/detail_psb.php"))die("File tidak ditemukan");
	include "konten/psb/detail_psb.php";
	break;

	case 'nilai':
	if(!file_exists("konten/nilai/nilai_tampil.php"))die("File tidak ditemukan");
	include "konten/nilai/nilai_tampil.php";
	break;

	case 'detail-nilai':
	if(!file_exists("konten/nilai/detail_nilai.php"))die("file tidak ditemukan");
	include "konten/nilai/detail_nilai.php";
	break;

	case 'backupdb':
	if(!file_exists("konten/utility/backupdb.php"))die("File tidak di temukan");
	include "konten/utility/backupdb.php";
	break;
}

?>
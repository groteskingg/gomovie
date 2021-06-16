<?php
include("configgomovie.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['signup'])){

	// ambil data dari formulir
	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
    $email = $_POST['email'];
	$username = $_POST['username'];
	$psswrd = $_POST['password'];

	// buat query
  $query = pg_query("INSERT INTO users (first_name, last_name, email, username, pass) VALUEs ('$fname', '$lname', '$email', '$username', '$psswrd')");

	// apakah query simpan berhasil?sda
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: signin.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: signup.php?status=gagal');
	}


} else {
	die("Akses dilarang...");
}
?>

<?php

    include "koneksi.php";
	
	echo "Nama: ";
	echo $name = $_POST['name'];
	echo "<br>";
	echo "Email: ";
	echo $email = $_POST['email'];
	echo "<br>";
	echo "Jumlah yang Datang: ";
    echo $guest = $_POST['guest'];
	echo "<br>";
	echo "Akan hadir di: ";
	echo $events = $_POST['events'];
	echo "<br>";
	echo "Ucapan Selamat: ";
	echo $message = $_POST['message'];
	echo "<br>";
	echo "Reservasi anda sudah tercatat";
	echo "<br>";
	echo "<br>";
	echo '<a href="index.html"><button>Kembali</button></a>';
	echo "<br>";

	$insert = mysqli_query($mysqli, "insert into undangan set name='$name', email='$email', guest='$guest', events='$events', message='$message'");
?>

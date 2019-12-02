<?php  

		// $mahasiswa = [
		// 	"nama" => "Rima Riani",
		// 	"nrp" => "173040117",
		// 	"email" => "rimariani12@gmail.com"
		// ];

		$dbh = new PDO('mysql:host=localhost;dbname=phpmvc', 'root', '');
		$db = $dbh->prepare('SELECT * FROM mahasiswa');
		$db->execute();
		$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

		$data = json_encode($mahasiswa);
		echo $data;
 ?>
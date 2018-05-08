<?php 
$pdo = new PDO ('mysql:host=localhost; dbname=ret_crud', 'root', '');

$mahasiswa = array();

$query = $pdo->query("SELECT * from mahasiswa");
while ($data = $query->fetch(PDO::FETCH_ASSOC)){
	$mahasiswa[] = $data;
}

echo json_encode($mahasiswa);

 ?>
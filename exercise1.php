<?php

// $pelajar = [
//     [
//     "nama" => "Amirrul Haiqal",
//     "umur" => 24,
//     "email"=> "amirrul@gmail.com"
//     ],
//     [
//     "nama" => "Saifudin",
//     "umur" => 23,
//     "email"=> "Saifudin@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=authentication','root','');
$db = $dbh->prepare('SELECT * FROM USER');
$db->execute();
$pelajar = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($pelajar);

echo $data;

?>
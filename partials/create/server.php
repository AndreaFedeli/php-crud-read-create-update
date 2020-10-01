<?php
include __DIR__ .'/../database.php';

if(empty($_post['roomNumber'])){
  die('Non hai inserito il numero della stanza');
}

if(empty($_POST['floor'])){
  die('Non hai inserito il numero del piano');

}

if(empty()){
  die('Non hai inserito il numero dei letti');
}

$sql = "INSERT INTO stanze (room_number, floor,beds,created_at,updated_at) VALUES(?,?,?,NOW(),NOW())";

$stmt = $conn->prepare($sql);

$stmt->bind_param("iii",$roomN,$floor,$beds)

$roomN = $_POST['roomNumber'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];

$stmt->execute();


if($stmt && $stmt->affected_rows > 0){
  header("Location:$basepath/show.php?id=$stmt->insert_id");
} elseif($stmt){
  die('nessun inserimento');
}else{
  die('errore');
}

$stmt->close();
$conn->close();

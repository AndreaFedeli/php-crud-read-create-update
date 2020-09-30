<?php
include __DIR__ .'/../database.php';

$sql = "UPDATE stanze
SET room_number = ?, floor = ?, beds = ?
WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iiii",$roomNumber,$floor,$beds,$id);

$roomnumber =$_POST['roomNumber'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];
$id = $_POST['id'];
$stmt->execute();

if($stmt && $stmt->affected_rows>0){
  header("Location:$basepath/show.php?id=$id");
}

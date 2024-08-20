<?php
 
require "database.php";

$capture=$pdo->prepare("SELECT problems FROM problemsforSAAS");
$capture->execute();

$display=$capture->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($display);

?>

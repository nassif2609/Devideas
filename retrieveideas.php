<?php
 
require "database.php";

$capture=$pdo->prepare("SELECT appideas FROM App_ideas_table");
$capture->execute();

$display=$capture->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($display);

?>

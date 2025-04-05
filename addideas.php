<?php

$pdo=new pdo("mysql:dbname=if0_37143728_appideasdatabase;host=sql110.infinityfree.com","if0_37143728","V9cZFLVNKuT1Z");

$pdo->prepare("INSERT INTO App_ideas_table (appideas) VALUES (?)")->execute([$_POST["appideas"]]);

header("Location:index.html");

?>

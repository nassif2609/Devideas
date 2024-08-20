<?php

require "database.php";

$pdo->prepare("INSERT INTO App_ideas_table (appideas,options) VALUES (?,?)")->execute([$_POST["userappidea"],$_POST["options"]]);

header("Location:index.html");

?>

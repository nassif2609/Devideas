<?php

require "database.php";

$pdo->prepare("INSERT INTO problemsforSAAS (problems,options) VALUES (?,?)")->execute([$_POST["problem"],$_POST["options"]]);

header("Location:index.html");

?>

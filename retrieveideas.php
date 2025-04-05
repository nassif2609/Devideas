<?php
 
header("Content-Type: application/json");

try {
    $pdo = new PDO(
        "mysql:dbname=if0_37143728_appideasdatabase;host=sql110.infinityfree.com",
        "if0_37143728",
        "V9cZFLVNKuT1Z"
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $capture = $pdo->prepare("SELECT no, appideas FROM App_ideas_table ORDER BY no DESC");
    $capture->execute();

    $display = $capture->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($display);
} catch (PDOException $e) {
    echo json_encode(["error" => "Database error: " . $e->getMessage()]);
}
?>




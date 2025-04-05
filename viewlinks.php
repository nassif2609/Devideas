<?php

header("Content-Type: application/json");

try {
    $pdo = new PDO(
        "mysql:dbname=if0_37143728_appideasdatabase;host=sql110.infinityfree.com",
        "if0_37143728",
        "V9cZFLVNKuT1Z"
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $ideaNo = isset($_GET['ideaNo']) ? intval($_GET['ideaNo']) : -1;

    if ($ideaNo >= 0) {
        $stmtValidate = $pdo->prepare("SELECT COUNT(*) FROM App_ideas_table WHERE no = :ideaIndex");
        $stmtValidate->bindParam(':ideaIndex', $ideaNo, PDO::PARAM_INT);
        $stmtValidate->execute();

        if ($stmtValidate->fetchColumn() == 0) {
            echo json_encode(["error" => "Invalid ideaNo. No matching idea found."]);
            exit;
        }

        $stmt = $pdo->prepare("SELECT appLink FROM links WHERE ideaIndex = :ideaIndex");
        $stmt->bindParam(':ideaIndex', $ideaNo, PDO::PARAM_INT);
        $stmt->execute();

        $links = $stmt->fetchAll(PDO::FETCH_COLUMN);
        echo json_encode($links);
    } else {
        echo json_encode(["error" => "Invalid ideaNo parameter."]);
    }
} catch (PDOException $e) {
    echo json_encode(["error" => "Database error: " . $e->getMessage()]);
}
?>

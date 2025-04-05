<?php

header("Content-Type: application/json");

try {
    $pdo = new PDO(
        "mysql:dbname=if0_37143728_appideasdatabase;host=sql110.infinityfree.com",
        "if0_37143728",
        "V9cZFLVNKuT1Z"
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $input = json_decode(file_get_contents("php://input"), true);

    if (!isset($input['ideaNo']) || !isset($input['appLink'])) {
        echo json_encode(["error" => "Invalid input: Missing parameters."]);
        exit;
    }

    $ideaNo = intval($input['ideaNo']);
    $appLink = trim($input['appLink']);

    if (filter_var($appLink, FILTER_VALIDATE_URL) === false) {
        echo json_encode(["error" => "Invalid input: Invalid URL."]);
        exit;
    }

    $stmtValidate = $pdo->prepare("SELECT COUNT(*) FROM App_ideas_table WHERE no = :ideaIndex");
    $stmtValidate->bindParam(':ideaIndex', $ideaNo, PDO::PARAM_INT);
    $stmtValidate->execute();

    if ($stmtValidate->fetchColumn() == 0) {
        echo json_encode(["error" => "Invalid ideaNo. No matching idea found."]);
        exit;
    }

    $stmtDuplicate = $pdo->prepare("SELECT COUNT(*) FROM links WHERE ideaIndex = :ideaIndex AND appLink = :appLink");
    $stmtDuplicate->bindParam(':ideaIndex', $ideaNo, PDO::PARAM_INT);
    $stmtDuplicate->bindParam(':appLink', $appLink, PDO::PARAM_STR);
    $stmtDuplicate->execute();

    if ($stmtDuplicate->fetchColumn() > 0) {
        echo json_encode(["error" => "Duplicate link."]);
        exit;
    }

    $stmt = $pdo->prepare("INSERT INTO links (ideaIndex, appLink) VALUES (:ideaIndex, :appLink)");
    $stmt->bindParam(':ideaIndex', $ideaNo, PDO::PARAM_INT);
    $stmt->bindParam(':appLink', $appLink, PDO::PARAM_STR);
    $stmt->execute();

    echo json_encode(["message" => "Link added successfully!"]);
} catch (PDOException $e) {
    echo json_encode(["error" => "Database error: " . $e->getMessage()]);
}
?>

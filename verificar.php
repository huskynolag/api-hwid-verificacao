<?php
require_once "../includes/db.php";
header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);
$hwid = $data["hwid"] ?? "";

if (!$hwid) {
    echo json_encode(["status" => "erro", "mensagem" => "HWID ausente"]);
    exit;
}

$stmt = $pdo->prepare("SELECT id FROM hwids WHERE hash = ?");
$stmt->execute([$hwid]);

if ($stmt->rowCount() > 0) {
    echo json_encode(["status" => "autorizado"]);
} else {
    echo json_encode(["status" => "negado"]);
}
?>

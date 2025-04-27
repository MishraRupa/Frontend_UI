<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Method Not Allowed
    echo json_encode(["status" => "error", "message" => "Only POST requests are allowed."]);
    exit;
}

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';


$validEmail = "test@example.com";
$validPassword = "123";


if ($email === $validEmail && $password === $validPassword) {
    echo json_encode(["status" => "success", "message" => "Login successful."]);
} else {
    http_response_code(401); // Unauthorized
    echo json_encode(["status" => "error", "message" => "Invalid email or password."]);
}
?>

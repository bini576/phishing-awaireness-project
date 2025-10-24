<?php
// tracker.php
// Simple PHP backend for phishing awareness tracking
header('Content-Type: application/json');

$filename = 'tracker_data.json';
if (!file_exists($filename)) {
    file_put_contents($filename, json_encode([
        'visitCount' => 0,
        'credCount' => 0,
        'usernames' => []
    ]));
}

$data = json_decode(file_get_contents($filename), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Increment credential count and add username
    $input = json_decode(file_get_contents('php://input'), true);
    if (isset($input['username']) && $input['username'] !== '') {
        $data['credCount']++;
        $data['usernames'][] = $input['username'];
        // Only increment visitCount for credential entry if you want
        file_put_contents($filename, json_encode($data));
        echo json_encode(['status' => 'ok']);
        exit;
    }
    echo json_encode(['status' => 'error', 'message' => 'No username']);
    exit;
}

// GET: increment visitCount only if Referer is the login page
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
if (strpos($referer, 'Login.html') !== false) {
    $data['visitCount']++;
    file_put_contents($filename, json_encode($data));
}
echo json_encode($data);

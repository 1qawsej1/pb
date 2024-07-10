<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    // Assuming events.json exists and is writable
    $events = json_decode(file_get_contents('events.json'), true);
    array_splice($events, $data['index'], 1);
    
    $result = file_put_contents('events.json', json_encode($events));
    
    if ($result !== false) {
        echo json_encode(['status' => 'success']);
    } else {
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => 'Failed to delete event']);
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(['status' => 'error', 'message' => 'Method Not Allowed']);
}
?>

<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = file_get_contents('php://input');
    
    // Debugging: Log received data
    file_put_contents('debug.log', "Received data: " . $data . PHP_EOL, FILE_APPEND);
    
    if (json_decode($data) !== null) {
        $result = file_put_contents('events.json', $data);
        
        if ($result === false) {
            http_response_code(500);
            echo json_encode(['status' => 'error', 'message' => 'Failed to save events']);
        } else {
            echo json_encode(['status' => 'success', 'message' => 'Events saved successfully']);
        }
    } else {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Invalid JSON']);
    }
} else {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method Not Allowed']);
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = file_get_contents('php://input');
    if (json_decode($data) !== null) {
        file_put_contents('events.json', $data);
        echo 'Events saved successfully';
    } else {
        http_response_code(400);
        echo 'Invalid JSON';
    }
} else {
    http_response_code(405);
    echo 'Method Not Allowed';
}
?>

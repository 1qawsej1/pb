<?php
    $data = file_get_contents('php://input');
    file_put_contents('events.json', $data);
    echo 'Events saved successfully';
?>

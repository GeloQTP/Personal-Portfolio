<?php

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode(
        [
            'message' => 'Hello, World!'
        ]
    );
} else {
    http_response_code(405);

    echo json_encode(
        [
            'message' => 'Method not Allowed'
        ]
    );
}

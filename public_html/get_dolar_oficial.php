<?php
header('Content-Type: application/json');

$url = 'https://mercados.ambito.com/dolar/oficial/variacion';
$options = [
    'http' => [
        'method' => 'GET',
        'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36\r\n"
    ]
];

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

if ($response === FALSE) {
    echo json_encode(['error' => 'Failed to fetch data']);
} else {
    // The response is already in JSON format, so we can just pass it through
    echo $response;
}

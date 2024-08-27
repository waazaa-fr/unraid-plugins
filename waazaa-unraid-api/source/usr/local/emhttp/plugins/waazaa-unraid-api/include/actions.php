<?php
header('Content-Type: application/json');

require_once '/usr/local/emhttp/plugins/waazaa-unraid-api/include/helpers.php';

// Log the action received
$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'isApiRunning':
        $running = isApiRunning(); // La fonction doit retourner true ou false
        echo json_encode(['running' => $running]);
        break;
    case 'start':
        $success = start(); // La fonction doit retourner true ou false
        echo json_encode(['success' => $success]);
        break;
    case 'stop':
        $success = stop(); // La fonction doit retourner true ou false
        echo json_encode(['success' => $success]);
        break;
    default:
        echo json_encode(['error' => 'Invalid action']);
        break;
}

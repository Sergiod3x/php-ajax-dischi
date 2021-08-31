<?php 

function printJson($database) {
    header('Content-Type: application/json');
    echo json_encode($database);
}
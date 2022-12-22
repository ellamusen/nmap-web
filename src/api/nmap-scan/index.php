<?php

// Read and decode json data from POST request
$data = json_decode(file_get_contents('php://input'), true);
$host = $data["host"];

system("nmap $host");

?>
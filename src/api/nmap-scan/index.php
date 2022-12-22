<?php

// Read and decode json data from POST request
$data = json_decode(file_get_contents('php://input'), true);
$host = $data["host"];

if (!str_starts_with($host, "127.0.0.1") && !str_starts_with($host, "localhost")) {
    echo "You can only scan 127.0.0.1 or localhost!";
    return null;
}
system("nmap $host");

?>
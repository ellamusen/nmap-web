<?php

$host_to_scan = $_POST["host"];

system("nmap $host_to_scan");

?>
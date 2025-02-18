<?php
// ping.php
header('Content-Type: application/json');

// Define the domains to test.
$domains = [
    "nl1.node.cptcr.cc",
    "nl2.node.cptcr.cc",
    "nl3.node.cptcr.cc"
];

// Function to perform a ping test using the system ping command.
function pingDomain($domain) {
    $pingResult = -1;
    $output = [];
    // Send 1 packet (Linux/Unix). Adjust for Windows if needed.
    exec("ping -c 1 " . escapeshellarg($domain), $output, $status);
    if ($status === 0) {
        foreach ($output as $line) {
            if (preg_match('/time=([\d\.]+)\s*ms/', $line, $matches)) {
                $pingResult = floatval($matches[1]);
                break;
            }
        }
    }
    return $pingResult;
}

$results = [];
foreach ($domains as $domain) {
    $results[$domain] = pingDomain($domain);
}

echo json_encode($results);

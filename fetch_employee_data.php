<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


header("Access-Control-Allow-Origin: *"); // Allows any domain to access this script
header("Content-Type: application/json"); // Ensures correct response format
header("Access-Control-Allow-Methods: GET"); // Specify methods (e.g., GET)
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Headers allowed


$apiUrl = "http://pmis.lged.gov.bd/pmis-api/api/employee";
$response = file_get_contents($apiUrl);

if ($response === FALSE) {
    echo json_encode(["error" => "Unable to fetch data from API."]);
} else {
    echo $response;
}
?>

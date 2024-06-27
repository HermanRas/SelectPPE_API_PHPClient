<?php
// API Details
$DOCs = "https://aca-employeeapi-vnext-san-001.proudsand-bcf65c39.southafricanorth.azurecontainerapps.io/swagger/index.html";
$BaseURL = "https://aca-employeeapi-vnext-san-001.proudsand-bcf65c39.southafricanorth.azurecontainerapps.io";
//"https://aca-employeeapi-vnext-san-001.proudsand-bcf65c39.southafricanorth.azurecontainerapps.io/api/Employee/EmployeeImportBulk";

$apiKey  = "d321309e-1c3f-47cc-8a99-7915a4319ff3";
$clientKey = "f12325-15a3-4a2a-bf67-a0b565c95a75";

// SQL Details
$host = 'SERVER';
$db   = 'DB';
$user = 'SQL_USER';
$pass = 'SQL_PASS';

$dsn = "sqlsrv:Server=$host;Database=$db;Encrypt=no;TrustServerCertificate=yes;";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::SQLSRV_ATTR_ENCODING    => PDO::SQLSRV_ENCODING_UTF8,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
    echo 'DB_CONNECTION ERROR !';
}

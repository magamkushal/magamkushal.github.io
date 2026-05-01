<?php
$host     = "db.fqmsgukldkhlemoximsa.supabase.co"; 
$port     = "6543"; // Using the pooler port to avoid IPv4 issues
$dbname   = "postgres";
$user     = "postgres";
$password = "QuizMaster@1975@ ";

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require";
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

<?php
include 'config.php';

try {
    $stmt = $pdo->query("SELECT * FROM courses");
    $courses = $stmt->fetchAll();

    if ($courses) {
        foreach ($courses as $course) {
            echo "ID: " . $course['course_id'] . " - Name: " . $course['course_name'] . "<br>";
        }
    } else {
        echo "Database is connected, but no data found. Check if RLS is disabled.";
    }
} catch (PDOException $e) {
    echo "Query Error: " . $e->getMessage();
}

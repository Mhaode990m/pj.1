
<?php
$localhost = 'localhost';
$username = 'root';
$password = '';
$dbname    = 'win';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli($localhost, $username, $password, $dbname);
} catch (mysqli_sql_exception $e) {
    echo "ERROR"; 
}

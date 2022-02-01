<?php

 
//IP Grabber
 
//Variables
 
$protocol = $_SERVER['SERVER_PROTOCOL'];
if(! empty($_SERVER['REMOTE_ADDR']) ){
    $ip = $_SERVER['REMOTE_ADDR'];
}
else{
    $ip = empty($_SERVER['HTTP_X_FORWARDED_FOR']) ? '' : $_SERVER['HTTP_X_FORWARDED_FOR'];
}
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$ref = $_SERVER['HTTP_REFERER'] ?: '';
$hostname = gethostbyaddr($ip);

$host = "localhost";
$user = "phpmyadmin";
$pass = "root";
$dbname = "dekkerthomas";

// set DSN
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

$pdo = new PDO($dsn, $user, $pass);

// insrt data

     $sql = "INSERT INTO ip(ip, hostname, port, agent, ref) VALUES (:ip, :hostname, :port, :agent, :ref)";
     $stmt = $pdo->prepare($sql);
     $stmt->execute(['ip' => $ip, 'hostname' => $hostname, 'port' => $port, 'agent' => $agent, 'ref' => $ref]);
     
?>
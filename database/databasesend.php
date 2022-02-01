<?php
           $host = "localhost";
           $user = "phpmyadmin";
           $pass = "root";
           $dbname = "dekkerthomas";

           // set DSN
           $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

           $pdo = new PDO($dsn, $user, $pass);

           // insrt data
                $ip = $_POST['ip'];
                $hostname = $_POST['hostname'];
                $port = $_POST['port'];
                $agent = $_POST['agent'];
                $ref = $_POST['ref'];

                $sql = "INSERT INTO ip(ip, hostname, port, agent, ref) VALUES (:ip, :hostname, :port, :agent, :ref,)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['ip' => $ip, 'hostname' => $hostname, 'port' => $port, 'agent' => $agent, 'ref' => $ref,]);
                echo "Data is toegevoegd";


           

?> 
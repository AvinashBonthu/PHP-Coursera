<?php

function pdoHelper() 
{
	$pdo = new PDO("mysql:host=localhost;port=3306;dbname=misc", "fred", "zap");
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
}
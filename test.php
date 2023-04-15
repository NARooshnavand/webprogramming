<?php
include 'functions.php';

require('Database.php');
$db = new Database();
$books = $db->query("SELECT * FROM books WHERE title LIKE '%book%'")
            ->fetchAll(PDO::FETCH_ASSOC);
dd($books);
?>
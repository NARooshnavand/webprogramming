<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webprogramming";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    // exit("Connected successfully");
    $sql = 'create table books (title VARCHAR(128) NOT NULL,Author VARCHAR(32) NOT NULL, publish_date DATE DEFAULT NULL);';
    if ($conn->query($sql) === TRUE) {
        echo "Table Books created successfully";
      } else {
        echo "Error creating table: " . $conn->error;
      }
      exit();
    $books = [
        [
            'title' => 'The first book',
            'Author' => 'Author1',
            'publish_date' => '1395',
            'price' => 100000
        ],
        [
            'title' => 'The new first book',
            'Author' => 'Author1',
            'publish_date' => '1395',
            'price' => 110000
        ],
        [
            'title' => 'The second book',
            'Author' => 'The second Author',
            'publish_date' => '1399',
            'price' => 200000
        ],
        [
            'title' => 'The third book',
            'Author' => 'The third Author',
            'publish_date' => '1395',
            'price' => 150000
        ]
    ];
    
    $filteredbook = array_filter($books,function($book){
        return $book['price'] <= 150000;
    });
require('index.view.php');
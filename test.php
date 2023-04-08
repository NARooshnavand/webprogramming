<?php
include 'Book.php';
include 'functions.php';
$book = new Book();
$book->title = 'The first title';
$book->author = 'Author1';
dd($book);

?>
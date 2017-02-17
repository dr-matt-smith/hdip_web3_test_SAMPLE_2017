<?php
// load classes
// ---------------------------------------
require_once __DIR__ . '/src/Book.php';
require_once __DIR__ . '/src/BookRepository.php';

use Itb\BookRepository;

// get reference to our repository
$bookRepository = new BookRepository();
$books = $bookRepository->getAll();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>books</title>
    <style>
        @import 'css/style.css';
    </style>
</head>

<body>

<h1>Great Detective Books</h1>

<table>
    <?php
        foreach($books as $book){
            $html = '';
            $html .= '<tr>';
            $html .= '<th>';
            $html .= $book->getTitle();
            $html .= '</th>';
            $html .= '<td>';
            $html .= '<img src="/images/' . $book->getImage() . '">';
            $html .= '</td>';
            $html .= '</tr>';
            print $html;
        }
    ?>
</table>

</body>
</html>

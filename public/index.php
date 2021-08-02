<?php
    require '../src/NameCard.php';

    echo NameCard::Plain(name : 'Sri Lakshmi Kanthan');

    header('Content-Type: image/svg+xml');
?>
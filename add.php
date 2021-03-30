<?php


if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $friend = array_map('trim', $_POST);

    if(empty($friend['firstname'])){
        $errors[] = 'the first name is required';
    }
    if(empty($friend['lastname'])){
        $errors[] = 'the lastname name is required';
    }


    $maxLength = 45;
    if(strlen($friend['firstname']) > $maxLength) {
        $errors[] = 'The firstname should be < ' . $maxLength . 'characters';
    }
    if(strlen($friend['lastname']) > $maxLength) {
        $errors[] = 'The lastname should be < ' . $maxLength . 'characters';
    }


    if (empty($errors)) {
        addFriend($friend);
        header('Location: /');
    }
}

require __DIR__ . '/src/views/form.php';





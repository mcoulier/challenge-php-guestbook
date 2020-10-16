<?php

declare(strict_types=1);

//Require the correct files
require('Post.php');
require('PostLoader.php');

//Setting the boxes to empty string if doesn't exist
if (!isset($_POST['title'])){
    $_POST['title'] = "";
}
if (!isset($_POST['name'])){
    $_POST['name'] = "";
}
if (!isset($_POST['msg'])){
    $_POST['msg'] = "";
}

//Naming variables
$title = $_POST['title'];
$date = new DateTimeImmutable();
$author = $_POST['name'];
$content = $_POST['msg'];

//When button is clicked, save full post to json file
if (isset($_POST['submit'])){
    $post = new Post($title, $date, $content, $author);
    $title = $post->getTitle();
    $date = $post->getDate();
    $author = $post->getAuthor();
    $content = $post->getContent();
    $getPosts = new PostLoader($title, $date, $content, $author);
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<form action="index.php" method="post">
    <p>
        <label for="title">Title: </label>
        <input type="text" id="title" name="title">
    </p>
    <p>
        <label for="date">Date: </label>
        <input type="date" id="date" name="date">
    </p>
    <p>
        <label for="name">Name: </label>
        <input type="text" id="name" name="name">
    </p>
    <p>
        <label for="msg">Message: </label>
        <textarea id="msg" name="msg" rows="7" cols="50"></textarea>
    </p>
    <input type="submit" name="submit">


</form>






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
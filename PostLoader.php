<?php

class PostLoader
{
    private array $posts;

    public function __construct(string $title, $date, string $content, $author)
    {
        $this->posts = ['title' => $title, 'date' => $date, 'content' => $content, 'author' => $author];
        $fileArray = [];
        array_push($fileArray, $title, $date, $content, $author);
        file_put_contents('log.json', json_encode($fileArray), JSON_PRETTY_PRINT);

    }

    public function addPost()
    {
        $guestbook = $this->getData();

    }

    public function getData()
    {
        $getBook = file_get_contents('log.json');
        json_decode($getBook, true);
    }




/*    public function addPost(Post $post)
    {
        $fileArray =[];


        array_push($posts, new Post());

    }*/


    public function getPosts(): array
    {
        return $this->posts;
    }


/*    public function loadAllPosts()
    {

        $data = json_encode('log.json', $this->posts, JSON_PRETTY_PRINT);

        foreach ($data as $post) {
            $this->posts[] = new Post($post['title']);
            array_push($this->posts, $post);
        }


    }*/
}






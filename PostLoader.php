<?php

class PostLoader
{
    private array $posts = [];

    public function __construct(string $title, DateTimeImmutable $date, string $content, $author)
    {
        $this->posts = ['title' => $title, 'date' => $date, 'content' => $content, 'author' => $author];
        return file_put_contents('log.json', JSON_PRETTY_PRINT);

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

    public function saveToFile()
    {


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






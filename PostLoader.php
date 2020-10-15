<?php

class PostLoader
{
    private array $posts;

    public function loadAllPosts(){

        $data = json_encode('log.json', $this->posts, JSON_PRETTY_PRINT);

        foreach ($data as $post){
            $this->posts[] = new Post($post['title']);
            array_push($posts, $post);
        }

    }

}
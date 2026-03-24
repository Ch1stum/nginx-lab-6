<?php

namespace App;

use Predis\Client;

class RedisExample
{
    private $client;

    public function __construct()
    {
        $this->client = new Client('tcp://redis:6379');
    }

    public function addGame($id, $name, $genre, $rating)
    {
        $this->client->hmset("game:$id", [
            'id' => $id,
            'name' => $name,
            'genre' => $genre,
            'rating' => $rating
        ]);
    }

    public function getGame($id)
    {
        return $this->client->hgetall("game:$id");
    }

    public function getAllGames()
    {
        $keys = $this->client->keys('game:*');
        $games = [];
        foreach ($keys as $key) {
            $games[] = $this->client->hgetall($key);
        }
        return $games;
    }

    public function updateGame($id, $field, $value)
    {
        $this->client->hset("game:$id", $field, $value);
    }

    public function deleteGame($id)
    {
        $this->client->del("game:$id");
    }
}

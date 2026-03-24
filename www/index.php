<?php

require 'vendor/autoload.php';

use App\RedisExample;
use App\ElasticExample;
use App\ClickhouseExample;

echo "<h1>Лабораторная работа №6</h1>";

// Redis (вариант 15 — Игры)
echo "<h2>Redis — Игры</h2>";
$redis = new RedisExample();

$redis->addGame(1, 'The Witcher 3', 'RPG', 9.5);
$redis->addGame(2, 'Cyberpunk 2077', 'RPG', 8.0);
$redis->addGame(3, 'Minecraft', 'Sandbox', 9.0);

echo "<h3>Игра с ID=1:</h3>";
var_dump($redis->getGame(1));

echo "<h3>Все игры:</h3>";
var_dump($redis->getAllGames());

$redis->updateGame(2, 'rating', 8.5);
echo "<h3>После обновления рейтинга Cyberpunk 2077:</h3>";
var_dump($redis->getGame(2));

$redis->deleteGame(3);
echo "<h3>После удаления Minecraft:</h3>";
var_dump($redis->getAllGames());

// Elasticsearch
echo "<h2>Elasticsearch</h2>";
$elastic = new ElasticExample();
$elastic->indexDocument('books', 1, ['title' => '1984', 'author' => 'Orwell']);
echo "<pre>" . $elastic->search('books', ['author' => 'Orwell']) . "</pre>";

// ClickHouse
echo "<h2>ClickHouse</h2>";
$click = new ClickhouseExample();
echo "<pre>" . $click->query('SELECT count() FROM system.tables') . "</pre>";

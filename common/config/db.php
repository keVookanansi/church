<?php

$url = getenv('DATABASE_URL');

if (!$url) {
    throw new \Exception('DATABASE_URL is not set in environment variables');
}

$parsed = parse_url($url);

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=' . $parsed['dpg-d1b7dtuuk2gs739ei8sg-a'] . ';port=' . ($parsed['port'] ?? 5432) . ';dbname=' . ltrim($parsed['path'], '/'),
    'username' => $parsed['user'],
    'password' => $parsed['pass'],
    'charset' => 'utf8',
];

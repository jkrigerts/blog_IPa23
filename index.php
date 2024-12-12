<?php

require "functions.php";
require "Database.php";

$config = require("config.php");

echo "Hi there <br>";
$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts")->fetchAll();
// $comments = $db->query("SELECT * FROM comments")->fetchAll(PDO::FETCH_ASSOC);
// $user = $db->query("SELECT * FROM users WHERE user_id = $id")->fetch(PDO::FETCH_ASSOC);
// $db->query("INSERT INTO posts ...");


echo "<ul>";
  foreach ($posts as $post) {
    echo "<li>" . $post["content"] . "</li>";
  }
echo "</ul>";


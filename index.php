<?php

// Mērķis: izveidot ierakstu meklētāju
// 1. Izveidot HTML formu ar input, submit pogu. ✅
// 2. PHP saņem no formas un ko tālāk?
// 3. Izveidot vaicājumu uz datubāzi

require "functions.php";
require "Database.php";

$config = require("config.php");

echo "<h1>Blogs</h1>";
$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts")->fetchAll();
// SELECT * FROM posts WHERE content LIKE "To kas ir search_query";

if (isset($_GET["search_query"]) && $_GET["search_query"] != "") {
  // TODO: Meklēšanas loģika
  dd("SELECT * FROM posts WHERE content LIKE '" . $_GET["search_query"] . "';");
  $posts = $db->query("SELECT * FROM posts WHERE content LIKE " . $_GET["search_query"])->fetchAll();
};

// Meklēšanas forma
// POST - ja maina datu bāzē saturu
// GET - ja vienkārši atlasa datus
echo "<form>";
echo "<input name='search_query' />";
echo "<button>Meklēt</button>";
echo "</form>";


echo "<ul>";
  foreach ($posts as $post) {
    echo "<li>" . $post["content"] . "</li>";
  }
echo "</ul>";


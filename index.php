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

$sql = "SELECT * FROM posts";
$params = [];
if (isset($_GET["search_query"]) && $_GET["search_query"] != "") {
  // Meklēšanas loģika
  $search_query = "%" . $_GET["search_query"] . "%";
  $sql .= " WHERE content LIKE :search_query;"; // Bind parameter
  $params = ["search_query" => $search_query];
}

$posts = $db->query($sql, $params)->fetchAll();

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


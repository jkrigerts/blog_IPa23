<?php

$sql = "SELECT * FROM posts";
$params = [];
if (isset($_GET["search_query"]) && $_GET["search_query"] != "") {
  // Meklēšanas loģika
  $search_query = "%" . $_GET["search_query"] . "%";
  $sql .= " WHERE content LIKE :search_query;"; // Bind parameter
  $params = ["search_query" => $search_query];
}

$posts = $db->query($sql, $params)->fetchAll();
$pageTitle = "Blogi";

require "views/index.view.php";

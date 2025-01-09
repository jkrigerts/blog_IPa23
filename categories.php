<?php

require "functions.php";
require "Database.php";

$config = include_once("config.php");
$db = new Database($config["database"]);

$sql = "SELECT * FROM categories";
$params = [];

if (isset($_GET["category"]) && $_GET["category"] != "") {
  $category = "%" . $_GET["category"] . "%";
  $sql .= " WHERE category_name LIKE :category;";
  $params["category"] = $category;
}

$categories = $db->query($sql, $params)->fetchAll();

echo "<form>";
echo "<input value='' name='category'>";
echo "<button>Meklēt</button>";
echo "</form>";

echo "<ul>";
foreach($categories as $category) {
  echo "<li>" . $category["category_name"] . "</li>";
}
echo "</ul>";



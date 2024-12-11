<?php

require "functions.php";

echo "Hi there <br>";

// 1. Datubāze ✅
// 2. Savienot PHP ar datubāzi ✅


// Ar PDO pieslēgties datubāzei
// data source name
$dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_IPa23;charset=utf8mb4";
// PHP data object
$pdo = new PDO($dsn); // Šeit vajadzētu ķert kļūdas

// Sagatavot vaicājumu
$statement = $pdo->prepare("SELECT * FROM posts");
// Izpildīt vaicājumu
$statement->execute();

// Dabūt bloga ierakstus
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

// Ar foreach izvadīt visus postus.

echo "<ul>";
  foreach ($posts as $post) {
    echo "<li>" . $post["content"] . "</li>";
  }
echo "</ul>";


<?php require "components/header.php" ?>
<?php require "components/navbar.php" ?>

<h1>Blogs</h1>

<form>
  <input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>' />
  <button>Meklēt</button>
</form>

<?php if (count($posts) == 0) { ?>
  <p>Neko neatradu, meklē citu vārdu 🙂</p>
<?php } ?>

<ul>
  <?php foreach ($posts as $post) { ?>
    <li> <?= $post["content"] ?> </li>
  <?php } ?>
</ul>

<?php require "components/footer.php" ?>
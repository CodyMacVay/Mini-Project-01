<?php
/**
 * header.php
 * Shared header (navigation + meta). Included at top of every page for consistent layout.
 */ ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Healthy Eating — <?php echo isset($page_title) ? htmlspecialchars($page_title) : 'Welcome'; ?></title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <a class="logo" href="index.php"><img src="images/logo.jpg" alt="Healthy Eating logo"></a>
      <nav class="main-nav" role="navigation" aria-label="Main navigation">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="recipes.php">Recipes</a>
        <a href="subscribe.php">Join Us</a>
      </nav>
    </div>
  </header>
  <main class="container">

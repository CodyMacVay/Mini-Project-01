<?php
// index.php - Home page
$page_title = 'Home';
include 'includes/header.php';
?>
<section class="hero">
  <h1>Healthy Eating</h1>
  <p class="lead">Simple ideas, balanced meals — small changes, big results.</p>
  <hr>
  <p>Explore healthy recipes, learn about good nutrition, and join our mailing list for weekly tips.</p>
  <div class="cta-row">
    <a class="btn" href="recipes.php">See Recipes</a>
    <a class="btn ghost" href="subscribe.php">Join the List</a>
  </div>
</section>

<section class="features">
  <article class="feature-card">
    <img src="images/salad.jpg" alt="Fresh salad">
    <h3>Wholesome Meals</h3>
    <p>Recipes that focus on whole foods, easy prep and great flavour.</p>
  </article>
  <article class="feature-card">
    <img src="images/smoothie.jpg" alt="Smoothie">
    <h3>Quick & Portable</h3>
    <p>Smoothies, bowls and snacks for busy days.</p>
  </article>
  <article class="feature-card">
    <img src="images/grains.jpg" alt="Grains">
    <h3>Balanced Nutrition</h3>
    <p>Learn how to combine proteins, grains and veg for satisfying plates.</p>
  </article>
</section>

<?php include 'includes/footer.php'; ?>
<?php
// recipes.php - Gallery / Recipes page
$page_title = 'Recipes';
include 'includes/header.php';
?>
<article class="content">
  <h2>Recipes & Ideas</h2>
  <p>Below are three example recipes. Each card shows a thumbnail, short description and a hover effect.</p>
  <div class="recipe-grid">
    <figure class="recipe-card">
      <img src="images/salad.jpg" alt="Mediterranean salad">
      <figcaption>
        <h4>Mediterranean Salad</h4>
        <p>Greens, cherry tomatoes, cucumber, olives and a lemon dressing.</p>
      </figcaption>
    </figure>

    <figure class="recipe-card">
      <img src="images/smoothie.jpg" alt="Berry smoothie">
      <figcaption>
        <h4>Berry Smoothie</h4>
        <p>Frozen berries, banana, yogurt and a spoon of oats for texture.</p>
      </figcaption>
    </figure>

    <figure class="recipe-card">
      <img src="images/grains.jpg" alt="Grain bowl">
      <figcaption>
        <h4>Warm Grain Bowl</h4>
        <p>Quinoa, roasted vegetables, chickpeas and tahini.</p>
      </figcaption>
    </figure>
  </div>
  <hr>
  <p class="muted">Tip: Images are placeholders. Replace the files in `images/` with your own photos for a personalised site.</p>
</article>
<?php include 'includes/footer.php'; ?>
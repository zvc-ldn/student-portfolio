<!DOCTYPE html>
<html lang="en-gb">
<?php
$title = 'My Blogs';
$description = 'browse my blogs';
$keywords = 'blog, blogpost, undergraduate, junior developer, website development, recruit';
include './shared/head.php'
?>
<body>

<?php include './shared/header.php' ?>

<div class="page-wrapper">
  <?php include './shared/side-panel.php' ?>


  <main class="main">
    <article class="page-hero"> <!-- used in place of 'div' to better section out this content semantically -->
      <h1>
        Blogs
      </h1>
    </article>

    <article class="blog">
      <section class="item"> <!-- sections nested within articles to further divide content into subsections -->
      <img class="cardImg" src="./img/the-industry-cr.png"> 
        <h2>
        The Digital Industry
        </h2>

        <p>
          Taking a look at the Tech Industry both in the UK as well as on a Global Scale, and how it may impact me as a postgraduate developer.
        </p>

        <a href="./blog-1.php" class="button button-white">
        View Blog &raquo;
        </a>

      </section> 


      <section class="item">
      <img class="cardImg" src="./img/my-portfolio-cr.png"> 
        <h2>
        Making My Portfolio
        </h2>

        <p>
          Explaining the inspiration, resources and skillset used to build my portfolio, from the design and styling to the core content.
        </p>

        <a href="./blog-2.php" class="button button-white">
          View Blog &raquo;
        </a>

      </section>
    

      <section class="item">
      <img class="cardImg" src="./img/performance-cr.png"> 
        <h2>
        Performance & Optimisation
        </h2>

        <p>
          Exploring the fundamentals of Search Engine Optimisation (SEO) using metadata, image compression and avoiding duplicate code.
        </p>

        <a href="./blog-3.php" class="button button-white">
        View Blog &raquo;
        </a>

      </section>

      <section class="item">
      <img class="cardImg" src="./img/improvements-cr.png"> 
        <h2>
        Improvements To My Portfolio
        </h2>

        <p>
          Describing the improvements made to my portfolio as I've progressed as a developer and learned how to use new technologies.
        </p>

        <a href="./blog-4.php" class="button button-white">
        View Blog &raquo;
        </a>

      </section>

      <section class="item">
      <img class="cardImg" src="./img/animation-cr.png"> 
        <h2>
        SVG Animation
        </h2>

        <p>
          Outlines the process of creating the animation on my homepage, drawing from both my graphic design and website development skillsets.
        </p>

        <a href="./blog-5.php" class="button button-white">
        View Blog &raquo;
        </a>

      </section>

      <section class="item">
      <img class="cardImg" src="./img/css-grid-cr.png"> 
        <h2>
        CSS Grid
        </h2>

        <p>
          Showcasing CSS Grid on my portfolio and explaining its features and uses regarding contemporary website layouts.
        </p>

        <a href="./blog-6.php" class="button button-white">
        View Blog &raquo;
        </a>

      </section>

    </article>

    <?php include './shared/footer.php' ?>
  </main>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en-gb">
<?php
$title = 'My portfolio';
$description = 'browse my portfolio';
$keywords = 'portfolio, digital, industry, tech, undergraduate, junior developer, website development, recruit, graphic, design, front end, html, css';
include './shared/head.php'
?>
<body>

<?php include './shared/header.php' ?>

<div class="page-wrapper">
  <?php include './shared/side-panel.php' ?>


  <main class="main">
    <article class="page-hero"> <!-- used in place of 'div' to better section out this content semantically -->
    <h1>
        Portfolio
      </h1>
    </article>

    <article class="portfolio">
      <section class="item"> <!-- sections nested within articles to further divide content into subsections -->
      <img class="cardImg" src="./img/northern-quarter.png"> 
      <h2>
        Northern Quarter Clubs & Bars
        </h2>

        <p>
          A website showing clubs and bars in Manchester's Northern Quarter, from location and opening hours to the general price of drinks.
        </p>

        <a href="http://www.17078003.webdevmmu.uk/website/index.html" target="_blank" class="button button-white">
          View Site &raquo;
        </a>

      </section> 
   

    
      <section class="item">
      <img class="cardImg" src="./img/adobe_portfolio.png"> 
        <h2>
          ZVC|DZN - Design Portfolio
        </h2>

        <p>
          This is my graphic design portfolio showcasing various pieces of work from 3D models and photo manipulation to illustrations.
        </p>

        <a href="https://zvcxdzn.myportfolio.com/work" target="_blank" class="button button-white">
          View Site &raquo;
        </a>

      </section>
    

  
      <section class="item">
      <img class="cardImg" src="./img/isongs.png"> 
        <h2>
        ¡Songs - My First Website
        </h2>

        <p>
          One of the first websites I created in my first year at the Manchester Metropolitan University using basic HTML and CSS.
        </p>

        <a href="http://www.17071012.webdevmmu.uk/Pierre-Powell_Zachari_17071012/songs_artists.php" target="_blank" class="button button-white">
          View Site &raquo;
        </a>

      </section>
    

    
      <section class="item">
      <img class="cardImg" src="./img/basement.png"> 
        <h2>
        Basement Studio Global
        </h2>

        <p>
          My final client portfolio site, sharing the same colour-scheme and navigation as this site, but also differing in many areas.
        </p>

        <a href="http://www.17071012.webdevmmu.uk/final-project/index.php" target="_blank" class="button button-white">
          View Site &raquo;
        </a>

      </section>
      

    </article>

    <?php include './shared/footer.php' ?>
  </main>
</div>

</body>
</html>

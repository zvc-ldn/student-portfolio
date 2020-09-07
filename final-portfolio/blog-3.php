<!DOCTYPE html>
<html lang="en-gb">
<?php
$title = 'Student Portfolio - Blog';
$keywords = 'blog, blogpost, digital, industry, tech, undergraduate, junior developer, website development, performance, optimsation,seo, search engine optimisation';

include './shared/head.php' /* include statement allows me to import all text/code/markup in head.php on each page on the site without duplicating code */ 
?>
<body>

 <?php include './shared/header.php' ?> <!-- allows me to put content in header.php on each page on the site without duplicating code -->

<div class="page-wrapper">
  <?php include './shared/side-panel.php' ?> <!-- allows me to put content in side-panel.php on each page on the site without duplicating code. so the social media buttons are always visible -->


  <main class="main">
  <div class="content-block">
    <div class="content">
    <div class="item">

        <img src="img/performance-cr.png" alt="desktop background: 'ZVC' logo for my design business" width="100%" height="auto" />
                    <p>
                            Zachari Pierre-Powell - Nov 2019
                        </p>

                        <h1>Performance & Optimisation</h1>

                        <h2>Code:</h2>

            <p>
                    When creating a website most people focus on only the design and development aspects, and after completing these believe that their work is done. However, testing your website is just as important as making it. Before making a website live, it is important to make sure it is ready for the void that is the World Wide Web. In order to do this, I made sure to validate my code in totality before uploading it. This is an essential process to carry out as a front-end developer in training because validating your code is also a method of debugging; if there are any errors in my code which I missed, the validator will pinpoint the section of code in question, so it can be fixed.
            </p>
            <p>
                    I used a combination of both the W3C Markup Validation Service and the W3C CSS Validation Service to validate my CSS stylesheet and all my HTML files. Some warnings were returned on both my CSS and HTML, however, I concluded them as being negligible as the warnings themselves were outside the scope of the validators.
            </p>

            <img src="img/index-code.png" alt="desktop background: 'ZVC' logo for my design business" 
            width="100%" height="auto" />

            <h2>Optimisation:</h2>
    
            <p>
                    In conjunction with validation, optimising our sites was another task we had to complete for this assignment, as well as it being good practice in the web development industry. This process involves shrinking file sizes, optimising media such as images, audio or videos and omitting unused CSS and unnecessary white space from your code.
            </p>
            <p>
                    There are various approaches to optimising your code but the more you do, the better the end result as it speeds up the loading times of pages on your website. Fast loading speeds for your site are essential as according to Kissmetrics, “47 percent of visitors expect a website to load in less than 2 seconds, and 40 percent of visitors will leave the website if the loading process takes more than 3 seconds” (Oberoi, 2014). This shows that speed is key because if your website isn’t loaded within 3 seconds, that’s a potential customer or employer you’ve lost.
            </p>
            <p>
                    In order to optimise the images on my site I used the ‘save for web’ function found natively within Photoshop combined with reducing the actual resolution of each image to their required sizes for each page. This makes the overall file size of each image smaller and also means that I wouldn’t need to manually code width and height values for each image on each page in my HTML files.
            </p>
           
            <h2>SEO Integration:</h2>

            <img src="img/metadata.png" alt="desktop background: 'ZVC' logo for my design business" 
            width="100%" height="auto" />
            
            <p>
                    Search Engine Optimisation or SEO determines how high on a given search engine’s ranking your website is placed. A good ranking is integral as you want internet users to be able to easily find you online. Meta tags, such as Meta Description, Meta Title and Meta Keywords are very significant as they increase your chances of appearing on the first google page based off what phrases and words someone searches (Louis, n.d.). I made sure all my meta tags were as descriptive and relevant as possible to guarantee that I had the best chance of moving up the google rankings.
                    
            </p>
    
            <h2>References:</h2>
    
            <p>
                    Louis, D. (n.d.). <i>13 Ways to Immediately Improve SEO Ranking of Your Website. </i> [online] Jeff Bullas Available at:<br> 
    
                    <a href= " https://www.jeffbullas.com/13-super-easy-ways-to-immediately-improve-your-seo-ranking/" target= "_blank"> https://www.jeffbullas.com/13-super-easy-ways-to-immediately-improve-your-seo-ranking/</a> <br>
                    [Accessed 5 Nov. 2019].
            </p>
            <p>
                    Oberoi, A. (2014). 5 Reasons Visitors Leave Your Website. <i>Website Magazine. </i> [online] Available at:<br> 
    
                    <a href= "https://www.websitemagazine.com/blog/5-reasons-visitors-leave-your-website" target= "_blank">https://www.websitemagazine.com/blog/5-reasons-visitors-leave-your-website</a> <br>
                    [Accessed 5 Nov. 2019].
            </p>
           

    <div class="backtotop">

        <a href="#top" class="button button-white">
        ↑ <!-- back to top arrow -->
        </a>

        </div>

        </div>
</div>
</div>

    <?php include './shared/footer.php' ?> <!-- allows me to put content in footer.php on each page on the site without duplicating code -->
  </main>
</div>

</body>
</html>

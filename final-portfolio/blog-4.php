<!DOCTYPE html>
<html lang="en-gb">
<?php
$title = 'Student Portfolio - Blog';
$keywords = 'blog, blogpost, digital, industry, tech, undergraduate, junior developer, website development, improvements, optmisation, performance, changes';

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

        <img src="img/improvements-cr.png" alt="desktop background: 'ZVC' logo for my design business" width="100%" height="auto" />
                    <p>
                            Zachari Pierre-Powell – Mar 2020
                        </p>

                        <h1>Improvements To My Portfolio</h1>

            <p>
            My new portfolio site comprises many elements from both my original portfolio and my final client project in order to both pay homage to my original idea but also show my growth as a developer; with many additions and omissions in place where necessary to better suit this particular project.
            </p>
            <p>
            My original portfolio website was built with a good foundation in terms of semantic HTML, but also lacked in many areas within the CSS. Based on official feedback and to combat these issues, I did a complete overhaul of my approach to optimisation, folder structure and CSS ultimately deciding to use SASS for added functionality. I also converted my HTML files to PHP files to facilitate this via the use of includes. PHP includes allow for less sections of code to be duplicated throughout the site, thus reducing the probability of errors and keeping all content on the site consistent. In addition to making global changes much easier to implement the include statement in PHP takes all the text/code/mark-up that exists in the specified file and copies it into the file that uses the include statement (W3Schools.com, n.d.).
            </p>

            <img src="img/index-code.png" alt="desktop background: 'ZVC' logo for my design business" 
            width="100%" height="auto" />
    
            <p>
            After researching how styling reacts to different browsers, I knew it was necessary to include a ‘normalize.css’ file in this new version of the site, as it brings all modern browsers to the same state (allowing all elements to render to a consistent standard) before applying styling (Schechter, 2019).
            </p>
            <p>
            I used SASS in order to make use of features such as includes, functions, ‘mixins’ and nesting. These allow you to define methods and styles that can be re-used throughout your site where necessary without needing to duplicate sections of code (Sass-lang.com, n.d.). I used both flexbox and grid somewhat equally in my original site, both are powerful tools but I decided to prioritise the use of flexbox for the updated version, in order to keep things simple and also because it has a little more support on browsers. 
            </p>
            <p>The website was designed with a mobile first approach considering that since 2017 over 50% of website visits are made via a mobile device (Statista, 2020). For this reason, as well as using PHP and SASS, I also used some JavaScript, or JS, in order to make a functioning hamburger menu when on mobile devices. 
            </p>

           <!--  <img src="img/tiny-png.png" alt="desktop background: screenshot of tinypng.com with my images" 
            width="100%" height="auto" /> -->
            
            <p>
            In addition to these changes I also made improvements to page metadata, for better search engine optimisation (SEO) and accessibility. With regard to optimisation as a whole I used a service called ‘Tiny png’ in order to compress and optimise all imagery on the website for the web, in addition to utilising ‘lazy loading’ on image files within the code itself in order to enhance this process. The use of includes and ‘mixins’ reduced the duplication of code throughout the site thus also improving the overall optimisation of the site.
            </p>
    
            <a href="http://17071012.webdevmmu.uk/" target= "_blank" class="button button-white">
          View Original Site &raquo;
        </a>

            <h2>References:</h2>
    
            <p>
            Sass-lang.com. (n.d.). <i>Sass: @mixin and @include.  </i> [online] Available at:<br> 
    
                    <a href= "https://sass-lang.com/documentation/at-rules/mixin" target= "_blank"> https://sass-lang.com/documentation/at-rules/mixin</a> <br>
                    [Accessed 18 Mar. 2020].
            </p>
            <p>
            Shechter, E. (2019).  <i>Normalize CSS or CSS Reset?!. </i> [online] Medium. Available at:<br> 
    
                    <a href= "https://medium.com/@elad/normalize-css-or-css-reset-9d75175c5d1e" target= "_blank">https://medium.com/@elad/normalize-css-or-css-reset-9d75175c5d1e</a> <br>
                    [Accessed 18 Mar. 2020].
            </p>
            <p>
            Statista. (2020). <i>Mobile share of website visits worldwide 2018 | Statista. </i> [online] Available at:<br> 
    
                    <a href= "https://www.statista.com/statistics/241462/global-mobile-phone-website-traffic-share/" target= "_blank">https://www.statista.com/statistics/241462/global-mobile-phone-website-traffic-share/ </a> <br>
                    [Accessed 18 Mar. 2020].
            </p>
            <p>
            W3schools.com. (n.d.). <i>PHP include and require. </i> [online] Available at:<br> 
    
                    <a href= "https://www.w3schools.com/php/php_includes.asp" target= "_blank">https://www.w3schools.com/php/php_includes.asp</a> <br>
                    [Accessed 18 Mar. 2020].
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

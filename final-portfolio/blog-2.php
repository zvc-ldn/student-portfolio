<!DOCTYPE html>
<html lang="en-gb">
<?php
$title = 'Student Portfolio - Blog';
$keywords = 'blog, blogpost, digital, industry, tech, undergraduate, junior developer, website development, building, portfolio';

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

        <img src="img/my-portfolio-cr.png" alt="desktop background: 'ZVC' logo for my design business" width="100%" height="auto" />
                    <p>
                            Zachari Pierre-Powell - Nov 2019
                        </p>

                        <h1>Making My Portfolio</h1>

                        <h2>Introduction & Inspiration:</h2>

<p>
        In the current website development climate, having a good portfolio that showcases both your shared and unique skills is critical when seeking employment in this field. With regard to building my portfolio, it all started with research into already established companies with dedicated research and development (R&D) teams for their websites. Industry-leaders such as Apple, Facebook and Google have spent millions on R&D in order to create the websites the average person is most comfortable navigating; thus, I thought it best not to attempt to redesign the wheel when there’s resources available that bypass the majority of this expensive and time-consuming process. 
</p>
<p>
        Essentially by using these websites as a graphical basis and both mimicking and foregoing various aspects of these said websites, it is much easier to build a new site which conforms to contemporary web design standards and best practices. One website in particular, which had a similar look and feel to what I was aiming for in my portfolio, was that of Sara Souiedan.
</p>

<img src="img/sara-souiedan.png" alt="desktop background: 'ZVC' logo for my design business" 
width="100%" height="auto" />
<p>
    (Sara Souiedan, 2019)
</p>

<p>
        Ms Souiedan’s portfolio offered both dark and light mode variants of the site, with dark mode being set as the default. This resonated with me personally as I’ve always been an advocate for dark mode and dark-themed interfaces since they were first available on iPhones via jailbreaking software hacks. In addition to this, with the recent release of iOS13, Apple finally brought dark mode natively to iPhones; a recent poll by tech forum, Slashdot, with over 9,400 votes shows that almost 70% of respondents use dark mode when it’s available (Slashdot, 2019). For these reasons, I decided to make my portfolio dark themed.
</p>

<h2>Looking Into The Code:</h2>

<p>
        As this was my first time creating a website on my own, my code is quite basic but is still able to portray the necessary information in an easily digestible fashion. There aren’t any amazing CSS animations or the like present, just semantic (or as semantic as possible at my current level) HTML to create the structure of the website, and a linked CSS stylesheet to provide the design elements. I found the HTML side of things easier to navigate as essentially it just encompasses the content and basic structural side of things; basically, if your site is set up correctly and you put some text in some ‘p tags’, a paragraph will appear in the viewport. It’s quite reassuring honestly, when what you code simply appears on the screen as intended.
</p>

<img src="img/inspect-element.png" alt="desktop background: 'ZVC' logo for my design business" 
width="100%" height="auto" />
<p>
    (Zachari Pierre-Powell, 2019)
</p>

<p>
        However, when creating my CSS stylesheet, I ran into some difficulties with the logic of my code as some lines just failed to run despite being present in the stylesheet. At this point, the ‘inspect element’ function available on Google Chrome and other mainstream browsers became my best friend. Using this feature, I was able to isolate areas of my CSS which were not functioning correctly, find the reason why this was the case and then amend my implementation in order to make it work properly. I initially started out only using flexbox but this also had limitations as it only operates one dimensionally, that is to say, elements can only be affected left-right or up-down independently. Whereas CSS grid allows you to code both these parameters at the same time; both flexbox and grid are used throughout my stylesheet to facilitate different design layouts on my portfolio.
</p>
<p>
        I realised quite late in my design process that although my website was responsive, it wasn’t designed with a mobile first approach, so the layout of my container classes were not exactly suitable for smaller screen sizes. To combat this though, I added some media queries to the bottom of my stylesheet so that the layout of my portfolio changed subtly depending on the size of the viewport. Making this work was critical as responsive web design is the future: “Rather than tailoring disconnected designs to each of an ever-increasing number of web devices, we can treat them as facets of the same experience. We can design for an optimal viewing experience but embed standards-based technologies into our designs to make them not only more flexible, but more adaptive to the media that renders them. In short, we need to practice responsive web design" (Marcotte, 2019).
</p>


<h2>References:</h2>

<p>
        Marcotte, E. (2019). Responsive Web Design. <i>A List Apart,</i> [online] Available at:<br> 

        <a href= "https://alistapart.com/article/responsive-web-design/" target= "_blank">https://alistapart.com/article/responsive-web-design/</a> <br>
        [Accessed 5 Nov. 2019].
</p>

<p>
        Slashdot. (2019). <i>Do you use 'Dark Mode' on your phone or computer?. </i> [online] (306) Available at:<br> 

        <a href= "https://slashdot.org/poll/3120/do-you-use-dark-mode-on-your-phone-or-computer" target= "_blank">https://slashdot.org/poll/3120/do-you-use-dark-mode-on-your-phone-or-computer</a> <br>
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

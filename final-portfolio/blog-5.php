<!DOCTYPE html>
<html lang="en-gb">
<?php
$title = 'Student Portfolio - Blog';
$keywords = 'blog, blogpost, digital, industry, tech, undergraduate, junior developer, website development, recruit, svg, animation, vector, graphics';

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

        <img src="img/animation-cr.png" alt="desktop background: 'ZVC' logo for my design business" width="100%" height="auto" />
                    <p>
                            Zachari Pierre-Powell – Mar 2020
                        </p>

                        <h1>SVG Animation</h1>

                        <h2>Aim:</h2>

            <p>
            - To implement an SVG Animation on my portfolio homepage.
            </p>

            <h2>Objectives:</h2>

            <p>
            - To research the benefits and drawbacks of SVG Animation (if present) and identify good practice. <br>

            - To learn SVG Animation using various educational resources. <br>

            - To add more artistic character to my portfolio by demonstrating the use of SVG Animation on my homepage. <br>
            </p>

            <h2>Definition:</h2>
    
            <p>
            SVG is an acronym for Scalable Vector Graphics, it is based on Extensible Markup Language (or XML) and is a tool for displaying a variety of graphics not only on the web, but also countless other digital and physical environments (Gerchev, 2017).
            </p>
            <p>
            An SVG document is comprised of simple plain text files that explain text, lines, curves, shapes and colours; allowing it to be scaled to almost any size algorithmically. Additionally, SVG documents are small in size, compressing well and are easily compatible with other open source technologies and languages as SVG is a W3C standard (Coyier, 2019). These attributes make it a powerful tool for both the web and design industries, and also meant it would work efficiently with the PHP, HTML, CSS and JavaScript (or JS) I’ve used to build my portfolio.
            </p>
            <p>
            Not only did I use SVG for this self-initiated project (or SIP), I also used these files for various imagery on the site including my logo in order to exploit the useful features previously explained. As a freelance graphic designer, I’ve explored the use of SVG outside of the web from logo design to illustration, but its integration with CSS animation makes it even more exciting and was one of the main reasons for deciding this SIP.
            </p>

            <h2>Setup:</h2>
            
            <p>
            I first used Figma, which is a free interface design application that works in the browser and has similar functionality to Adobe XD. Although I’m well versed in Adobe software, due to the fact there’s a reasonable free option and it has an intuitive UI, Figma is a very useful resource for designers and developers alike simply based on accessibility. For this reason, I decided to use it and it allowed me to easily create my initial text file, while also learning to navigate a new software at the same time.
            </p>

            <p>
            Other than this I used the free code editor, Visual Studio Code (or VS Code) by Microsoft to create my PHP, HTML, CSS and JS documents and all pages and stylesheets are HTML5 and CSS3 ready.
            </p>

            <h2>Location:</h2>

            <p>
            Both the CSS and HTML code snippets for my SVG Animation can be viewed on the CodePen widget below.
            </p>

            <iframe height="405" style="width: 100%;" scrolling="no" title="SVG Animation - Welcome" src="https://codepen.io/zvc-ldn/embed/yLNrwmE?height=265&theme-id=dark&default-tab=css,result" frameborder="no" allowtransparency="true" allowfullscreen="true">
  See the Pen <a href='https://codepen.io/zvc-ldn/pen/yLNrwmE'>SVG Animation - Welcome</a> by Zachari Pierre-Powell
  (<a href='https://codepen.io/zvc-ldn'>@zvc-ldn</a>) on <a href='https://codepen.io'>CodePen</a>.
</iframe>

            <p>
            Here you can see my demonstrator in real time and understand the logic of my code, while also observing how the exported SVG markup works with my CSS.
        </p>

            <h2>How I Done It:</h2>

            <p>
            Using Figma, I first picked a web safe font to use for this SIP and chose to make the fill colour transparent and the stroke colour white at a thickness of 10px for a better final effect with this particular animation. Once it looked how I needed, I exported this as a raw plain text SVG document that could be copied and pasted directly into Visual Studio Code (or VS Code) as semantic markup for later use. After this step I no longer needed to use Figma; as previously mentioned, this can be substituted for other photo editing and prototyping software.
        </p>

            <p>
            I then pasted the markup from the SVG document, describing all the individual paths and strokes, into a basic HTML index page in VS Code; giving it an ID of ‘welcome’. Due to the SVG colour being set to white, I needed to apply styling for it to show in the browser as it was intentionally created for a dark themed website. I initially imported the CSS from my original portfolio as a basis, but I deleted most of the clutter and just adapted the styling to make it more relevant to set up the animation and also to emulate how it could look on the homepage.
        </p>

        <img src="img/old-portfolio-anim.png" alt="desktop background: screenshot of tinypng.com with my images" 
            width="100%" height="auto" />

        <p>
        The paths and strokes which I mentioned before, relate to the individual ‘letters’ in my SVG animation; in this case the word ‘Welcome’. Now to begin animating these letters I selected these paths via the ID I created earlier using ‘nth-child()’. I then duplicated this code for the rest of the letters so that I could animate each one individually.
        </p>

        <p>
        Another powerful feature that can be utilised by SVG, is ‘stroke-dasharray’. This is one of the key factors in this specific type of animation as it creates gaps in the strokes and paths of the letters, based on developer input. The other important factor is ‘stroke-dashoffset’, which moves the position of these gaps. Using these together I learned how to create this animation. I did this by setting both the ‘stroke-dasharray’ and ‘stroke-dashoffset’ values to a number greater than each individual strokes value in pixels (1080px worked comfortably). This allowed me to effectively make each individual letter vanish off the screen; and by changing the ‘stroke-dashoffset’, while leaving the ‘stroke-dasharray’ unchanged, I was able to animate this process in reverse (Dev Ed, 2018).
        </p>

        <p>
        CSS animation works well with SVG via the native compatibility with keyframes. Using this I done a line animation which set the ‘stroke-dashoffset’ back to zero (effectively bringing the vanished letter back into view). However, there was one final step, which was adding the timing and animation direction for each individual letter, making sure to add a delay so each one organically appeared in order.
        </p>

            <h2>Evaluation:</h2>

            <p>
            SVG is a powerful tool and an amazing skill to re-learn in a completely new way. I am confident that my demonstrator showcases an artistic perspective on the hugely versatile file type and also showcases my growth as a developer and freelance graphic designer.
            </p>

            <h2>References:</h2>
    
            <p>
            Coyier, C., 2019. <i>Using SVG | CSS-Tricks. </i> [online] CSS-Tricks. Available at:<br> 
    
                    <a href= "<https://css-tricks.com/using-svg/>" target= "_blank"> https://css-tricks.com/using-svg/ </a> <br>
                    [Accessed 18 Mar. 2020].
            </p>
            <p>
            Dev Ed, 2018. <i>SVG Animation With Text Tutorial | HTML CSS. </i> [video] Available at:<br> 
    
                    <a href= "https://www.youtube.com/watch?v=vJNVramny9k" target= "_blank">https://www.youtube.com/watch?v=vJNVramny9k</a> <br>
                    [Accessed 18 Mar. 2020].
            </p>
            <p>
            Gerchev, I., 2017. <i>SVG 101: What Is SVG? (And What Is It Actually Good For?). </i> [online] SitePoint. Available at:<br> 
                    <a href= "https://www.sitepoint.com/svg-101-what-is-svg/" target= "_blank">https://www.sitepoint.com/svg-101-what-is-svg/</a> <br>
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

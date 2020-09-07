<!DOCTYPE html>
<html lang="en-gb">
<?php
$title = 'Student Portfolio - Blog';
$keywords = 'blog, blogpost, digital, industry, tech, undergraduate, junior developer, website development, recruit, css, grid, flexbox, layout, design';

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

        <img src="img/css-grid-cr.png" alt="desktop background: 'ZVC' logo for my design business" width="100%" height="auto" />
                    <p>
                            Zachari Pierre-Powell – Mar 2020
                        </p>

                        <h1>CSS Grid</h1>

                        <h2>Aim:</h2>

            <p>
            - To demonstrate the use of CSS Grid Layout (or CSS Grid/Grid) and its features on my portfolio site and in my demonstrator.
            </p>

            <h2>Objectives:</h2>

            <p>
            - To research the benefits and drawbacks of CSS Grid (if present) and showcase some of its features, with regard to layouts. <br>

            - To learn CSS Grid using a variety of educational resources. <br>

            - To develop a layout for my portfolio and blogs page using CSS Grid, ensuring these pages are responsive. <br>
            </p>

            <h2>Definition:</h2>
    
            <p>
            CSS Grid is a two-dimensional grid-based layout system, which means it is able to manage both rows and columns by applying CSS rules to both a parent element and also to that element’s children. This differentiates it from Flexbox as the latter is only a one-dimensional system, making CSS Grid the most powerful layout system available today (A Complete Guide to Grid, 2020).
            </p>
            <p>
            I used a mixture of Flexbox and CSS Grid for both this updated portfolio and my original one. I decided to focus more on Grid this time for the layout of elements on each page though, and also to further my knowledge on the layout system. Also because it was the very first CSS module created primarily for solving the layout issues developers have had to work around for years.
            </p>

            <h3>CSS Grid VS Flexbox:</h3>

            <p>
            As previously mentioned, Flexbox is a one-dimensional layout system within CSS, that is able to position objects either horizontally or vertically via columns or rows using efficient and intuitive syntax. However, due this like of multidimensionality, Flexbox struggles to effectively tackle complex layout designs to the degree and ease that Grid can. Flexbox is still widely used though, as it has higher support for old browsers and also works well with Grid.
            </p>

            <h2>Setup:</h2>
            
            <p>
            I used the free code editor, Visual Studio Code (or VS Code) by Microsoft to create my PHP, HTML, CSS and JS documents and all pages and stylesheets are HTML5 and CSS3 ready.
            </p>


            <h2>Location:</h2>

            <p>
            Both the CSS and HTML code snippets for my Grid Layout can be viewed on the embedded CodePen widget below.
            </p>

            <iframe height="605" style="width: 100%;" scrolling="no" title="CSS Grid Mosaic" src="https://codepen.io/zvc-ldn/embed/OJVeojW?height=605&theme-id=dark&default-tab=css,result" frameborder="no" allowtransparency="true" allowfullscreen="true">
  See the Pen <a href='https://codepen.io/zvc-ldn/pen/OJVeojW'>CSS Grid Mosaic</a> by Zachari Pierre-Powell
  (<a href='https://codepen.io/zvc-ldn'>@zvc-ldn</a>) on <a href='https://codepen.io'>CodePen</a>.
</iframe>

            <p>
            Here you can see my demonstrator in real time and understand the logic of my code, while also observing how the ‘cards’ shift responsively as the window changes size.
        </p>

        <h2>How I Done It:</h2>

        <h3>Portfolio:</h3>

            <p>
            For the layout of my portfolio, I started out by putting the elements I wanted to be styled, into relevantly named classes and subclasses relating to their use in my code (such as ‘blog’ and ‘item), making sure to include all images and content that I wanted to be affected by my CSS later. These subclasses (or child elements) would later become the individual sections of my grid layout.
        </p>

            <p>
            When creating my CSS stylesheet, I initially copied over the paragraphing styles present within the rest of my portfolio, in order to ensure that the new text would look homogenous with the rest of the website. After this initial step it was time to start working with the features only present in Grid.
            </p>

        <p>
        I done this by displaying Grid within the parent class of each element and creating a grid template. This is the basics of CSS Grid, however, where it gets interesting is the ‘auto-fit’ and ‘auto-fill’ features which are unique to Grid and how they have made building responsive layouts easier than ever before. By using this one simple line of code: ‘grid-template-columns:  repeat(auto-fit, minmax(350px,1fr) );’ I was able to make a responsive layout without the need for media queries (Auto-Sizing Columns in CSS Grid: `auto-fill` vs `auto-fit`, 2020).
        </p>

        <p>
        To explain, cascading CSS is still in effect while this line of code isn’t active, so outside of these parameters content would flow from top to bottom as usual without the need for media queries, which also helps for the mobile first approach. However, due to the creation of repeated columns with a minimum width of 350 pixels and a maximum width of 1 fraction (viewport width divided by one) and the all-important ‘auto-fit’ syntax, the child elements within the parent element (the ‘items’ within ‘blog’) are able to fit side by side on the page as long as the outlined conditions are met.
        </p>

        <h3>Demonstrator:</h3>

        <p>
        I chose a different approach for my demonstrator as it shows the versatility of CSS Grid and also because it was easier to input static values within a dynamic mosaic layout, where I have full control of the output and breakpoints; as opposed to a whole portfolio website. I started by creating a basic HTML index page and defined an ID of ‘mosaic’ and some numbered classes up to the quantity of ‘cards’ I wanted to display, in this case 5. Once this was done it was time to tackle the CSS. 

        </p>

        <p>
        Firstly, I initialised a font and background colour for each ‘card’ so that I could follow the flow of the numbered images as they moved based on my input. I then displayed Grid and created a layout of 6 columns and styled the 5 rows with a height of 100 pixels and a grid-gap of 10 pixels, essentially revealing something resembling a grid instead of a big block. Now all I had to do was make some of these ‘cards’ span multiple grid columns or rows to either increase their height or width in order to create my mosaic layout. The last thing I had to do was edit these layouts for different screen sizes via media queries, so they looked more appropriate.
        </p>

            <h2>Evaluation:</h2>

            <p>
            Firstly, I initialised a font and background colour for each ‘card’ so that I could follow the flow of the numbered images as they moved based on my input. I then displayed Grid and created a layout of 6 columns and styled the 5 rows with a height of 100 pixels and a grid-gap of 10 pixels, essentially revealing something resembling a grid instead of a big block. Now all I had to do was make some of these ‘cards’ span multiple grid columns or rows to either increase their height or width in order to create my mosaic layout. The last thing I had to do was edit these layouts for different screen sizes via media queries, so they looked more appropriate.
            </p>

            <h2>References:</h2>
    
            <p>
            CSS-Tricks. 2020. <i>A Complete Guide To Grid. </i> [online] CSS-Tricks. Available at:<br> 
    
                    <a href= "https://css-tricks.com/snippets/css/complete-guide-grid/" target= "_blank"> https://css-tricks.com/snippets/css/complete-guide-grid/ </a> <br>
                    [Accessed 18 Mar. 2020].
            </p>
            <p>
            CSS-Tricks. 2020. <i>Auto-Sizing Columns In CSS Grid: `Auto-Fill` Vs `Auto-Fit`. </i> [online] CSS-Tricks. Available at:<br> 
    
                    <a href= "https://css-tricks.com/auto-sizing-columns-css-grid-auto-fill-vs-auto-fit/" target= "_blank"> https://css-tricks.com/auto-sizing-columns-css-grid-auto-fill-vs-auto-fit/ </a> <br>
                    [Accessed 18 Mar. 2020].
            </p>
            <p>
            Julio Codes, 2019. <i>The magic of auto-fit and auto-fill (and the difference between them). </i> [video] Available at:<br> 
    
                    <a href= "https://www.youtube.com/watch?v=zgXHgKad7N0&t=1503s" target= "_blank">https://www.youtube.com/watch?v=zgXHgKad7N0&t=1503s</a> <br>
                    [Accessed 18 Mar. 2020].
            </p>
            <p>
            Powell K., 2019. <i>Responsive Image Gallery Layout using CSS Grid | HTML and CSS Tutorial. </i> [video] Available at:<br> 
    
                    <a href= "https://www.youtube.com/watch?v=vJNVramny9k" target= "_blank">https://www.youtube.com/watch?v=qjJR3qYCd54&t=90s</a> <br>
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

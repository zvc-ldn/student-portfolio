<!DOCTYPE html>
<html lang="en-gb">
<?php
$title = 'Student Portfolio';
$keywords = 'home, homepage, digital, industry, tech, undergraduate, junior developer, website development, recruit, graphic, design, front end, html, css, portfolio';

include './shared/head.php' /* include statement allows me to import all text/code/markup in head.php on each page on the site without duplicating code */ 
?>
<body>

 <?php include './shared/header.php' ?> <!-- allows me to put content in header.php on each page on the site without duplicating code -->

<div class="page-wrapper">
  <?php include './shared/side-panel.php' ?> <!-- allows me to put content in side-panel.php on each page on the site without duplicating code. so the social media buttons are always visible -->


  <main class="main">
    <div class="home">
    <div class="contentHome">

    <img src="./img/homeImg.png" class="home-img" alt="ZVC logo in 3D" width="auto" height="auto">

    <article class="page-hero"> <!-- used in place of 'div' to better section out this content semantically -->
      <h1>
        <svg 
            id="welcome"
            width="943" height="163" viewBox="0 0 943 163" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M58.4531 122.844C70.1719 122.844 76.0312 116.984 76.0312 105.266V5.65625H111.188V105.266C111.188 116.984 117.047 122.844 128.766 122.844C140.484 122.844 146.344 116.984 146.344 105.266V5.65625H181.5V105.266C181.5 140.422 163.922 158 128.766 158C109.234 158 97.5156 152.141 93.6094 140.422C89.7031 152.141 77.9844 158 58.4531 158C23.2969 158 5.71875 140.422 5.71875 105.266V5.65625H40.875V105.266C40.875 116.984 46.7344 122.844 58.4531 122.844Z" stroke="white" stroke-width="10"/>

                <path d="M283.453 5.65625L286.969 40.8125H228.375V64.25H275.25V99.4062H228.375V122.844H286.969L283.453 158H193.219V5.65625H283.453Z" stroke="white" stroke-width="10"/>

                <path d="M298.688 158V5.65625H333.844V122.844H392.438L388.922 158H298.688Z" stroke="white" stroke-width="10"/>

                <path d="M480.328 122.844H497.906L494.391 158H480.328C429.547 158 404.156 132.609 404.156 81.8281C404.156 31.0469 429.547 5.65625 480.328 5.65625H494.391L497.906 40.8125H480.328C452.984 40.8125 439.312 54.4844 439.312 81.8281C439.312 109.172 452.984 122.844 480.328 122.844Z" stroke="white" stroke-width="10"/>

                <path d="M577.594 40.8125C555.719 40.8125 544.781 54.4844 544.781 81.8281C544.781 109.172 555.719 122.844 577.594 122.844C598.688 122.844 609.234 109.172 609.234 81.8281C609.234 54.4844 598.688 40.8125 577.594 40.8125ZM577.594 5.65625C622.125 5.65625 644.391 31.0469 644.391 81.8281C644.391 132.609 622.125 158 577.594 158C532.281 158 509.625 132.609 509.625 81.8281C509.625 31.0469 532.281 5.65625 577.594 5.65625Z" stroke="white" stroke-width="10"/>

                <path d="M779.156 40.8125C767.438 40.8125 761.578 46.6719 761.578 58.3906V158H726.422V58.3906C726.422 46.6719 720.562 40.8125 708.844 40.8125C697.125 40.8125 691.266 46.6719 691.266 58.3906V158H656.109V58.3906C656.109 23.2344 673.688 5.65625 708.844 5.65625C728.375 5.65625 740.094 11.5156 744 23.2344C747.906 11.5156 759.625 5.65625 779.156 5.65625C814.312 5.65625 831.891 23.2344 831.891 58.3906V158H796.734V58.3906C796.734 46.6719 790.875 40.8125 779.156 40.8125Z" stroke="white" stroke-width="10"/>
                
                <path d="M933.844 5.65625L937.359 40.8125H878.766V64.25H925.641V99.4062H878.766V122.844H937.359L933.844 158H843.609V5.65625H933.844Z" stroke="white" stroke-width="10"/>
                </svg>
        <span class="heading-hidden">Welcome</span>  
      </h1>
    </article>

        <p>
        Hi, my name is Zac and I'm a 22 year old undergraduate in my final year at the Manchester Metropolitan University. I am currently studying website development and hope to explore a career in front-end development as it appeals to my graphic design background. Please feel free to browse my portfolio and have a look at my CV to understand more about me in the professional scope.
        </p>
    </div>
    </div>

    <?php include './shared/footer.php' ?> <!-- allows me to put content in footer.php on each page on the site without duplicating code -->
  </main>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en-gb">
<?php
$title = 'Contact';
$description = 'contact me today via email or the social media buttons provided.';
$keywords = 'contanct, email, github, instagram, outlook, digital, industry, tech, undergraduate, junior developer, website development, recruit';
include './shared/head.php'
?>
<body>

<?php include './shared/header.php' ?>

<div class="page-wrapper">
  <?php include './shared/side-panel.php' ?>


  <main class="main">
  <div class="content-block">
    <div class="content">
    <div class="card">
        <h1>
        Contact
        </h1>

        <form class="form" action="https://formspree.io/mjvwnjyw" method="POST"> <!-- initialised the form class -->
          <label class="form-label" for="name">
            Full name:
          </label>
          <input class="form-input" type="text" id="name" name="name" />

          <label class="form-label" for="email">
            Email:
          </label>
          <input class="form-input" type="email" id="email" name="_replyto" />
          
          <label class="form-label" for="additional-information">
            Enquiry:
          </label>
          <textarea class="form-input" id="additional-information" name="additional-information"
                    rows="5"></textarea>
          <button class="form-submit button button-white" type="submit">
            Send
          </button>
        </form>
      </div>

      </div>
      </div>
      </div>

      <div class="booking-right" id="js-booking-preview"></div>
    </article>

    <?php include './shared/footer.php' ?>
  </main>
</div>

</body>
</html>

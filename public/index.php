<?php if(count($_REQUEST) == 0): ?>
  <!DOCTYPE html>

  <html lang="en">
      <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
          crossorigin="anonymous"
        />
        <script
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
          crossorigin="anonymous"
        ></script>
        <script 
          src="https://code.jquery.com/jquery-3.6.0.min.js" 
          integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
          crossorigin="anonymous"
        ></script>
        <link 
          rel="stylesheet" 
          href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" 
          integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" 
          crossorigin="anonymous"
        />
        <script 
          src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"
        ></script>
        
        <link href="assets/css/main.css" rel="stylesheet" />

        <script>
          $(function() {
            feather.replace();
          });
        </script>
        
        <title>NameCard</title>
      </head>
      <body>
        <header>
          <nav class="navbar fixed-top">
            <div class="container">
              <div class="navbar-brand">
                <a href="/">NameCard</a>
              </div>
              <ul class="nav navbar-nav justify-content-end">
                <li><a href="https://github.com/srilakshmikanthanp/namecard"><i data-feather="github"></i></a></li>
              </ul>
            </div>
          </nav>
        </header>
        <main>
          <div class="container text-center">
            <div class="row">
              <div class="col">
                <p class="fs-4">Generate Name Card for github Readme</p>
                <p class="fs-6">Visit github for details</p> 
              </div>
            </div>
          </div>
        </main>
        <footer>
          <div class="container text-center">
            Made with &hearts; by Sri Lakshmi Kanthan
          </div>
        </footer>
      </body>
  </html>
<?php else: ?>
  <?php
    // Include the Necessary Files
    require_once ('../src/NameCard.php');

    // Generate Name Card
    if(isset($_REQUEST['card']) && $_REQUEST['card'] === 'plain')
    {
      echo NameCard::Plain(
        intro: isset($_REQUEST['intro']) ? htmlentities($_REQUEST['intro']) : '',
        title: isset($_REQUEST['title']) ? htmlentities($_REQUEST['title']) : '',
        about: isset($_REQUEST['about']) ? htmlentities($_REQUEST['about']) : '',
        fg: isset($_REQUEST['fg']) ? htmlentities($_REQUEST['fg']) : 'white',
        bg: isset($_REQUEST['bg']) ? htmlentities($_REQUEST['bg']) : '#262b2f',
        width: isset($_REQUEST['width']) ? intval($_REQUEST['width']) : 600,
        height: isset($_REQUEST['height']) ? intval($_REQUEST['height']) : 300,
        radius: isset($_REQUEST['radius']) ? intval($_REQUEST['radius']) : 0,
      );
    }
    else
    {
      echo NameCard::invalid();
    }

    // Set the content type
    header('Content-Type: image/svg+xml');
  ?>
<?php endif; ?>

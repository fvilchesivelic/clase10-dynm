<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php $title = "Mi PHP pegajoso"; ?>
    <title><?php print $title ?></title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <style type="text/css">
      @import url('href="https://fonts.googleapis.com/css?family=Slackey');
        #bob{
          font-family: Slackey, serif;
        }

        #bg:after{
          background-image: url(https://brentcards.com/wp-content/uploads/thon/spongebob-squarepants-birthday-card-new-post-your-best-sky-picture-the-student-room-of-spongebob-squarepants-birthday-card-1024x600.jpg);
          opacity: 0.3;
          content: "";
          top: 0;
          left: 0;
          bottom: 0;
          right: 0;
          position: absolute;
          z-index: -1;   
        }


    </style>

  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
        <a class="navbar-brand" href="index.php">PHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?> 
            <li class="nav-item active">
            <?php } else { ?>
            <li class="nav-item">
            <?php };?>
              <a class="nav-link" href="index.php">Portada</a>
            </li>
            <?php if((basename($_SERVER['PHP_SELF']))=='page.php'){?> 
            <li class="nav-item active">
            <?php } else { ?>
            <li class="nav-item">
            <?php };?>
              <a class="nav-link" href="page.php">Top 20 Bob</a>
            </li>
          </ul>
        </div>
      </div>
      </nav>
    </header>
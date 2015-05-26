<!DOCTYPE html>
<html>
  <head>
    <title>khuonggau.com template - Artists</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
  </head>
  <body id="artists" data-spy="scroll" data-target=".scrollspy">
    <section class="container">
      <div class="content row">
        <?php include "_/components/php/header.php"; ?>
        <section class="main col col-lg-8">
          <?php include "_/components/php/article-artistlist.php"; ?>
        </section><!-- main -->
        <section class="sidebar col col-lg-4">
          <?php include "_/components/php/aside-news.php"; ?>
          <?php include "_/components/php/aside-collection.php"; ?>
        </section><!-- sidebar -->
      </div><!-- content -->
      <?php include "_/components/php/footer.php"; ?>
    </section><!-- container -->
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>

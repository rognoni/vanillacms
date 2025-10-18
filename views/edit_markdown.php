<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="static/pico.min.css">
    <title><?php echo $filename; ?> | VanillaCMS</title>
    <style>
      .editor {
          height: 500px;
      }
    </style>
  </head>
  <body>
    <main class="container">
        <?php require "views/inc_nav.php"; ?>
        <article id="content"><div class="editor"><?php echo $markdown; ?></div></article>
    </main>
    <script src="static/overtype.min.js"></script>
    <script>
        new OverType(".editor", { showStats: true, toolbar: true });
    </script>
  </body>
</html>
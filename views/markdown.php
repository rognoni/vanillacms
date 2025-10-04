<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="static/pico.min.css">
    <title><?php echo $filename; ?> | VanillaCMS</title>
  </head>
  <body>
    <main class="container">
        <?php require "views/inc_nav.php"; ?>
        <article id="content"></article>
        <div id="markdown" style="display: none"><?php echo $markdown; ?></div>
    </main>
    <script src="static/marked.min.js"></script>
    <script>
        document.getElementById("content").innerHTML = marked.parse(document.getElementById("markdown").innerHTML);
    </script>
  </body>
</html>
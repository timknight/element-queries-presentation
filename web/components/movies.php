<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/assets/css/application.min.css">
  <title>Movie Listing Pattern - Container Query Examples</title>
</head>
<body>
  <div class="page-header">
    <div class="container">
      <h1><a href="/">Container Query Examples</a> &raquo; Movie Listing Component</h1>
    </div>
  </div>
  <div class="container">
    <div class="component">
      <h1>Movie Listing Component (Sidebar)</h1>
      <div class="row">
        <aside class="col-sm-6 col-md-6 col-lg-4">
          <?php include('inc/movies.html') ?>
        </aside>
      </div>
    </div>
    <div class="component">
      <h1>Movie Listing Component (Full)</h1>
      <?php include('inc/movies.html') ?>
    </div>
  </div>
  <script src="/assets/js/application.min.js"></script>
</body>
</html>